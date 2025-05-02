<?php


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{

    public function hotelBookingListing(Request $req){
        // dd($req->all());
        $query = Booking::query();
        if($req->has('invoice') && !empty($req->invoice)) {
            $query->where('invoice', 'LIKE', '%' . $req->invoice . '%');
        }
        if ($req->has('check_in') && !empty($req->check_in)) {
            $query->where('check_in', '=', $req->check_in);
        }
        $bookings = $query->where('booking_type', '1')->orderBy('created_at','desc')
                           ->with(['property','userDetail' => function ($query) {
                                $query->withTrashed(); 
                            }])->paginate(10);
        return view('backend.booking.hotel-booking',compact('bookings'));
    }

    public function updateOfflineAmount(Request $req){
        // dd($req->all());
        $booking = Booking::find($req->id);
        if(!$booking){
            return redirect()->back()->with('error','Booking not found');
        }
        $booking->payment_method = '1';
        $booking->save();
        return redirect()->back()->with('success','Offline amount updated successfully');
    }

}