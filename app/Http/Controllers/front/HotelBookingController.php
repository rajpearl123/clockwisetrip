<?php
namespace App\Http\Controllers\front;

use App\Models\Property;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Str;
use Mail;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;



class HotelBookingController extends Controller
{
    
    

    public function get_curl_handle_razorpay($razorpayPaymentId, $amount, $currencyCode)
    {
        $url = 'https://api.razorpay.com/v1/payments/' . $razorpayPaymentId . '/capture';
        $key_id = env('RAZORPAY_KEY');
        $key_secret = env('RAZORPAY_SECRET');
        // $arr = ['amount' => $amount, 'currency' => $currencyCode];
        $arr = ['amount' => $amount * 100, 'currency' => $currencyCode];

        $arr1 = json_encode($arr);
        $fields_string = $arr1;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        return $ch;
    }

    public function proceedPayment($request)
    {
        try {
            if (!empty($request['razorpay_payment_id']) || !empty($request['merchant_order_id'])) {
                $razorpayPaymentId = $request['razorpay_payment_id'];
                $merchant_order_id = $request['merchant_order_id'];
                $currencyCode = "INR";
                $amount = $request['amount'];
                $success = false;
                $error = '';

                Log::info('Starting payment process', [
                    'razorpay_payment_id' => $razorpayPaymentId,
                    'merchant_order_id' => $merchant_order_id,
                    'amount' => $amount,
                    'currency' => $currencyCode
                ]);
                $user = Auth::User();
                try {
                    $ch = $this->get_curl_handle_razorpay($razorpayPaymentId, $amount, $currencyCode);
                    
                    $result = curl_exec($ch);
                    // dd($result);
                    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                    Log::info('Razorpay cURL Result', ['result' => $result, 'http_status' => $http_status]);

                    if ($result === false) {
                        $success = false;
                        $error = 'Curl error: ' . curl_error($ch);
                        Log::error('Curl execution failed: ' . curl_error($ch));
                    } else {
                        $response_array = json_decode($result, true);
                        Log::info('Razorpay Response', $response_array);

                        if ($http_status === 200 && isset($response_array['status'])) {
                            if ($response_array['status'] == 'captured') {
                                $email = Auth::user()->email;
                                $payment = Payment::create([
                                    'r_payment_id' => $response_array['id'],
                                    'merchant_order_id' => $merchant_order_id, 
                                    'method' => $response_array['method'],
                                    'currency' => $response_array['currency'],
                                    'user_email' => $email ?? '',
                                    'amount' => $response_array['amount'] / 100,
                                    'json_response' => $result,
                                ]);

                                Log::info('Payment successfully captured', ['status' => $response_array['status']]);
                                return 'captured';
                            } else {
                                $error = 'Payment capture failed: ' . $response_array['status'];
                                Log::error('Payment capture failed', ['status' => $response_array['status']]);
                                return 'failed';
                            }
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'] . ': ' . $response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR: Invalid Response';
                            }
                            Log::error('Razorpay API error', ['error' => $error]);
                        }
                    }

                    curl_close($ch);
                } catch (Exception $e) {
                    $success = false;
                    $error = 'OPENCART_ERROR: Request to Razorpay Failed - ' . $e->getMessage();
                    Log::error('Error processing payment: ' . $e->getMessage());
                }
            } else {
                $error = 'Missing required payment data';
                Log::error('Error processing payment: ' . $error);
            }
        } catch (Exception $e) {
            $error = 'An error occurred: ' . $e->getMessage();
            Log::error('Error processing payment: ' . $error);
        }

        if ($error) {
            Log::error('Final error during payment: ' . $error);
            return 'An error occurred. Contact site administrator, please!';
        }

        return $success;
    }

    public function thankYou(Request $request){
        // dd($request->all());
        \Log::channel('prevent-history')->info('PreventBackHistory middleware triggered for URL: ');
        \Log::info('PreventBackHistory middleware triggered for URL: ');
        $today = Carbon::now()->format('d-M-Y');
        $type = $request->get('type');
        $requestType = 'web';
        $user = User::find($request->get('user'));  
        if(Auth::User()->id != $request->get('user')){
            abort(403);
        }   

       if($type == 1){
            $booking = Booking::find($request->get('booking'));             
            $property = Property::find($request->get('property'));
   
            $data = $request->get('data');
            $role = $request->get('role');
            $response = response()->view('mails.web.hotel-booking', compact('booking', 'user', 'property', 'data', 'role', 'today'));

            return $response
                    ->header('Cache-Control', 'no-store, no-cache, must-revalidate, private')
                    ->header('Pragma', 'no-cache')
                    ->header('Expires', '0');
        }
        
    }

   public function hotelBookingStore(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'property_id' => 'required|numeric',
            'transaction_via' => 'required|string',
            'merchant_order_id' => 'required|string',
            'amount' => 'required|numeric',
            'passenger' => 'required|numeric',
            'admin_commision' => 'required|numeric',
            'gst' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'address' => 'required',
            'payment_method' => 'required|numeric',
        ]);

        if (Auth::check()) {
            if ($request->payment_method == 1) {
                $paymentData = [
                    'razorpay_payment_id' => $request->razorpay_payment_id,
                    'merchant_order_id' => $request->merchant_order_id,
                    'amount' => $request->amount,
                ];
                $payment = $this->proceedPayment($paymentData);
                if ($payment === 'captured') {
                    $property = Property::find($request->property_id);

                    if (!$property) {
                        return back()->with('error', 'Booking details not found!');
                    }

                    $user = Auth::user();
                    $invoiceNumber = now()->format('Ym') . rand(100000, 999999);

                    // Create booking
                    $booking = Booking::create([
                        'user_id' => $user->id,
                        'booking_type' => '1',
                        'relative_table_id' => $request->property_id,
                        'invoice' => $invoiceNumber,
                        'r_payment_id' => $request->razorpay_payment_id,
                        'passenger' => $request->passenger,
                        'admin_commision' => $request->admin_commision,
                        'gst'           => $request->gst, 
                        'check_in' => $request->check_in,
                        'check_out' => $request->check_out,
                        'amount' => $request->amount,
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile_no' => $request->mobile_no,
                        'address' => $request->address,
                        'payment_method' => '1',
                    ]);

                    // Generate invoice and save PDF
                    $year = now()->year;
                    $month = now()->format('M');
                    $today = Carbon::now()->format('d-M-Y');
                    $fileName = "invoice_{$invoiceNumber}.pdf";
                    $directoryPath = public_path("hotel-booking/{$year}/{$month}");
                    $adminEmail = View::shared('adminEmail');

                    if (!File::exists($directoryPath)) {
                        File::makeDirectory($directoryPath, 0777, true);
                    }


                        // Generate the QR code with the route
                        $qrCode = new QrCode(route('invoice.show', ['invoiceNumber' => $invoiceNumber]));
                        $writer = new PngWriter();
                        $qrCodeContent = $writer->write($qrCode)->getString();

                        $qrCodeDirectory = public_path("qr-codes/{$year}/{$month}");
                        if (!File::exists($qrCodeDirectory)) {
                            File::makeDirectory($qrCodeDirectory, 0777, true);
                        }

                        $qrCodeFilePath = "{$qrCodeDirectory}/{$invoiceNumber}-qr.jpg";
                        file_put_contents($qrCodeFilePath, $qrCodeContent);

                        $booking->update([
                            'qr_image' => "qr-codes/{$year}/{$month}/{$invoiceNumber}-qr.jpg",
                        ]);

                    // Generate the PDF
                        $filePath = "{$directoryPath}/{$fileName}";
                        $pdf = Pdf::loadView('pdf.hotel-booking-invoice', compact('property', 'user', 'request', 'booking', 'adminEmail', 'today', 'qrCodeFilePath'));
                        $pdf->save($filePath);
                        $booking->update([
                            'invoice_pdf' => "hotel-booking/{$year}/{$month}/{$fileName}",
                        ]);

                    // Send emails
                    $this->sendEmail($user->email, $user, $property, $booking, 'user');
                    $this->sendEmail($adminEmail, $user, $property, $booking, 'admin');

                    return redirect()->route('thank.you', [
                        'string' => Str::random(500),
                        'property' => $property,
                        'user' => $user,
                        'booking' => $booking,
                        'type' => 1,
                    ])->with('success', 'Payment successful and booking completed');
                }
                return back()->with('error', 'Payment failed!');
            }

            if ($request->payment_method == 2) {
                    $property = Property::find($request->property_id);
                    if (!$property) {
                        return back()->with('error', 'Booking details not found!');
                    }
                    $user = Auth::user();
                    $invoiceNumber = now()->format('Ym') . rand(100000, 999999);
                    // Create booking
                    $booking = Booking::create([
                        'user_id' => $user->id,
                        'booking_type' => '1',
                        'relative_table_id' => $request->property_id,
                        'invoice' => $invoiceNumber,
                        'r_payment_id' => null,
                        'passenger' => $request->passenger,
                        'admin_commision' => $request->admin_commision,
                        'gst'           => $request->gst, 
                        'check_in' => $request->check_in,
                        'check_out' => $request->check_out,
                        'amount' => $request->amount,
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile_no' => $request->mobile_no,
                        'address' => $request->address,
                        'payment_method' => '2',
                    ]);

                    // Generate invoice and save PDF
                    $year = now()->year;
                    $month = now()->format('M');
                    $today = Carbon::now()->format('d-M-Y');
                    $fileName = "invoice_{$invoiceNumber}.pdf";
                    $directoryPath = public_path("hotel-booking/{$year}/{$month}");
                    $adminEmail = View::shared('adminEmail');

                    if (!File::exists($directoryPath)) {
                        File::makeDirectory($directoryPath, 0777, true);
                    }


                        // Generate the QR code with the route
                        $qrCode = new QrCode(route('invoice.show', ['invoiceNumber' => $invoiceNumber]));
                        $writer = new PngWriter();
                        $qrCodeContent = $writer->write($qrCode)->getString();

                        $qrCodeDirectory = public_path("qr-codes/{$year}/{$month}");
                        if (!File::exists($qrCodeDirectory)) {
                            File::makeDirectory($qrCodeDirectory, 0777, true);
                        }

                        $qrCodeFilePath = "{$qrCodeDirectory}/{$invoiceNumber}-qr.jpg";
                        file_put_contents($qrCodeFilePath, $qrCodeContent);

                        $booking->update([
                            'qr_image' => "qr-codes/{$year}/{$month}/{$invoiceNumber}-qr.jpg",
                        ]);

                    // Generate the PDF
                        $filePath = "{$directoryPath}/{$fileName}";
                        $pdf = Pdf::loadView('pdf.hotel-booking-invoice', compact('property', 'user', 'request', 'booking', 'adminEmail', 'today', 'qrCodeFilePath'));
                        $pdf->save($filePath);
                        $booking->update([
                            'invoice_pdf' => "hotel-booking/{$year}/{$month}/{$fileName}",
                        ]);

                    // Send emails
                    $this->sendEmail($user->email, $user, $property, $booking, 'user');
                    $this->sendEmail($adminEmail, $user, $property, $booking, 'admin');

                    return redirect()->route('thank.you', [
                        'string' => Str::random(500),
                        'property' => $property,
                        'user' => $user,
                        'booking' => $booking,
                        'type' => 1,
                    ])->with('success', 'Payment successful and booking completed');
            

            }
        }
    }

    private function sendEmail($email, $user, $property, $booking, $role)
    {
        $subject = 'Hotel Booking Invoice';
        $isAdmin = ($role === 'admin');

        Mail::send('mails.booking-email', compact('user', 'property', 'booking', 'role', 'isAdmin'), function ($message) use ($email, $subject, $booking) {
            $message->to($email);
            $message->subject($subject);
            $message->attach(public_path($booking->invoice_pdf));
        });
    }

    public function showInvoice($invoiceNumber)
    {
        $booking = Booking::where('invoice', $invoiceNumber)->first();
        if (!$booking) {
            return abort(404, 'Invoice not found');
        }
        $property = Property::find($booking->relative_table_id);
        return view('front.checkout.invoice', compact('booking','property'));
    }

}
