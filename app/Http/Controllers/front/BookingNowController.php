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
use Str;


class BookingNowController extends Controller
{
    
    public function store_book_now(Request $request)
{
  
    // Validate the incoming data
    $validated = $request->validate([
        'check_in' => 'required',  
        'check_out' => 'required', 
        'no_of_adult' => 'required',  
        'no_of_child' => 'required',  
        'no_of_room' => 'required',  
        'property_id' => 'required',  
    ]);

  
    if (Auth::check()) {
        try {
            $booking = new BookingNow();
            $booking->check_in_time = $request->check_in;
            $booking->check_out_time = $request->check_out;
            $booking->adult = $request->no_of_adult;
            $booking->children = $request->no_of_child;
            $booking->room = $request->no_of_room;
            $booking->property_id = $request->property_id;
            $booking->user_id = Auth::user()->id;  
            $booking->save();  


            return redirect()->back() 
                ->with('message', 'Booking successfully stored!')
                ->with('booking_id',$booking->id)
                ->with('booking', $booking);  
        } catch (\Exception $e) {
            \Log::error('Booking failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Something went wrong. Please try again later.']);
        }
    } else {
        return redirect()->route('login')->with('message', 'You need to be logged in to make a booking.');
    }
}

   
   public function chose_payment_method(Request $request)
   {
    // dd($request->all());
       if (Auth::check()) {
            $user = Auth::user(); 

            $full_name = $user->name;
            $email = $user->email;
            $mobile_no = $user->mobile_no ?? $request->mobile_no;
            $property_id=$request->property_id;
            $pay_payment_value=$request->pay_payment_value;
            $check_in = $request->check_in;
            $check_out = $request->check_out;
            $no_of_room = $request->no_of_room;
            $no_of_nights = $request->no_of_nights;
            $no_of_guest = $request->no_of_guest;

          

            $propert_details = Property::where('id', $property_id)->first();

            if (!$propert_details) {
                abort(404, 'Property not found');
            }

            $check_in = $request->check_in;
            return view('front.trending-destination.chose_payment_method', compact('check_in','check_out','no_of_room','no_of_guest','no_of_nights','full_name', 'email', 'mobile_no', 'propert_details', 'pay_payment_value','property_id'));
        }

        return redirect()->route('login');
   }


   public function store_book_now_other(Request $request)
   {
    if(Auth::check()){
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:15', 
        ]);

        $booking = BookingNow::where('user_id', Auth::user()->id)
                            ->orderBy('created_at', 'desc') 
                            ->first();
        if ($booking) {
            
            $booking->email_address = $request->email;
            $booking->full_name = $request->full_name;
            $booking->mobile_no = $request->mobile_no;
        
            $booking->save();

            return redirect()->back()->with('message', 'Booking successfully updated!');

        } else {

            return redirect()->back()->with('error', 'No booking found for this user.');
        }
    }else{
        return response()->json(['error' => 'Please log in to book this property.'], 401);
    }

   }

   public function bookings(Request $request,$amount,$property_id)
   { 
    // dd($amount,$property_id);
        $user = Auth::user();
        $booking = Booking::create([
            'user_id' => $user->id,
            'property_id' => $property_id,
            'amount' => $amount,
            'payment_type' => 'Razor Pay', 
        ]);
        // dd($booking);
        Mail::to($user->email)->send(new BookingConfirmationUser($booking));

        $adminEmail = 'rubyjaribazar@gmail.com'; 
        Mail::to($adminEmail)->send(new BookingConfirmationAdmin($booking));

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Booking successful, email notifications sent.',
                'booking' => $booking,
            ], 200);
        }

        return redirect()->route('thank-you')->with('message', 'Booking successful, details sent via email.');
   }

   public function thankYou(){

    return view('front.booking.hotel-booking.thank-you');
   }


}
