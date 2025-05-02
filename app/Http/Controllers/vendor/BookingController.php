<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;

use App\Models\Facility;
use App\Models\User;
use App\Models\Property;
use App\Models\Booking;
use App\Models\PropertyVisible;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{

    public function list(){
        $bookings = DB::table('bookings')
        ->join('propertys', 'bookings.relative_table_id', '=', 'propertys.id')
        ->where('propertys.vendor_id', Auth::guard('vendor')->user()->id)
        ->select('bookings.*', 'propertys.title as property_title')
        ->get();

        return view('backend.vendor.bookings.list',compact('bookings'));
    }

    public function view($id){
        
        $booking = Booking::where('id', $id)->first();
        $property = Property::where('id', $booking->relative_table_id)->first();
        $propertyImages = json_decode($property->image);

        return view('backend.vendor.bookings.view', compact('booking','property','propertyImages'));
    }
}