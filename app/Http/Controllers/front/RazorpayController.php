<?php

namespace App\Http\Controllers\front;

use App\Models\BookingNow; // Correct model import
use App\Models\Property;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationUser;
use App\Mail\BookingConfirmationAdmin;
use DB;

class RazorpayController extends Controller
{
    public function get_curl_handle_razorpay($razorpayPaymentId, $amount, $currencyCode)  {
    $url = 'https://api.razorpay.com/v1/payments/'.$razorpayPaymentId.'/capture';
    $key_id = 'rzp_test_dYBsRTVP3NxryK';
    $key_secret = 'kS2hj2UAfhb8MP2giaUJF6eL';
    $arr = ['amount' => $amount, 'currency' => $currencyCode];

    $arr1 = json_encode($arr);
    $fields_string = $arr1;
    //cURL Request      
    //cURL Request
    $ch = curl_init();
    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    return $ch;
}





public function bookingStore(Request $request){

   
    $user=Auth::user();

    if (!empty($request->input('razorpay_payment_id')) && !empty($request->input('order_id'))) {
        $razorpayPaymentId = $request->input('razorpay_payment_id');
        $order_id = $request->input('order_id');
        $mobile_no = $request->input('mobile_no');
        $currencyCode = $request->input('currency_code');
        $amount = round((intval($request->input('merchant_total')) * 100), 0);
         // $amount = $request->pay_payment_value;
        $success = false;
        $error = '';
                      
            $ch = $this->get_curl_handle_razorpay($razorpayPaymentId, $amount, $currencyCode);
            //execute post
            $result = curl_exec($ch);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            $data = [
                'razorpay_payment_id' => $razorpayPaymentId,
                'transaction_via'     => 'razorpay',
                'order_id'            =>  $order_id,
                // 'mobile_no'            =>  $mobile_no,
                'user_id'             => Auth::user()->id,
                
            ];
            // dd($data);
            $pay_amount=$request->pay_payment_value;
            $property_id=$request->property_id;

            DB::table('transactions')->insert($data);

             $data1 = [
                'order_id' =>$order_id,
                'email'    => $user->email,
                'mobile_no' => $user->mobile_no,
                'amount'   =>  $pay_amount,
                'user_id'  => Auth::user()->id,
                'property_id'  => $property_id,
                'mobile_no'  => $mobile_no,
                'payment_method'=>'Razor Pay',
                
            ];

             DB::table('orders')->insert($data1);

             return redirect()->route('store.booking.detail', [
                'amount' => $pay_amount, 
                'property_id' => $property_id
            ]);        }
    }

    //Vijay Controller Code
    public function createOrder(Request $request)
    {
        $validated = $request->validate([
            'total_amount' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
        ]);

        $api = new Api('YOUR_RAZORPAY_KEY', 'YOUR_RAZORPAY_SECRET'); 

        // Create a Razorpay order
        $orderData = [
            'receipt'         => rand(),
            'amount'          => $validated['total_amount'] * 100, // Amount in paise (Razorpay accepts amount in paise)
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        try {
            $order = $api->order->create($orderData);
            $orderId = $order['id'];

            // Pass order details to the frontend for Razorpay checkout
            return view('checkout', compact('orderId', 'validated'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Method to handle payment success and save payment details in the database
    public function handlePaymentSuccess(Request $request)
    {
        // Validate the incoming payment response
        $validated = $request->validate([
            'razorpay_payment_id' => 'required|string',
            'razorpay_order_id'   => 'required|string',
            'razorpay_signature'  => 'required|string',
        ]);

        // Payment success handling (verify signature if necessary)
        $payment_id = $validated['razorpay_payment_id'];
        $order_id = $validated['razorpay_order_id'];
        $signature = $validated['razorpay_signature'];

        // Here you would typically verify the payment signature, 
        // but for simplicity, we will proceed with saving the payment data

        // Save the booking details and payment details
        $booking = new Booking();
        $booking->razorpay_payment_id = $payment_id;
        $booking->razorpay_order_id = $order_id;
        $booking->razorpay_signature = $signature;
        $booking->name = $validated['name'];
        $booking->email = $validated['email'];
        $booking->phone = $validated['phone'];
        $booking->checkin_date = $validated['checkin_date'];
        $booking->checkout_date = $validated['checkout_date'];
        $booking->gst_details = $request->input('gst_details') ? json_encode($request->input('gst_details')) : null;
        $booking->save();

        // Return a response indicating success
        return redirect('/payment-success'); // Redirect to a success page
    }

    // Method to show the payment success page
    public function paymentSuccess()
    {
        return view('payment-success');
    }

            
}
   



