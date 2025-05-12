<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\User;
use App\Models\City;
use App\Models\TaxRate;
use App\Models\PrivacyPolicyModel;
use App\Models\TearmConditionModel;
use App\Models\AboutUsModel;
use App\Models\Comment;
use App\Models\PropertyWeekendDeal;
use App\Models\Home;
use App\Models\Banner;

use App\Models\Newsletter;

use App\Models\HomepageTrendingDestination;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $data = Home::first();
        $location = $request->input('location');
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $rooms = $request->input('rooms');

        $filter_data = Property::where('address', 'like', '%' . $location . '%')->get();

        $property_weekend_deals = PropertyWeekendDeal::select('property_id', DB::raw('COUNT(*) as deal_count'))
            ->whereNull('deleted_at')
            ->groupBy('property_id')
            ->get();

        $property_ids = $property_weekend_deals->pluck('property_id');
        $all_weekend_property_book = Property::whereIn('id', $property_ids)->get();
        $city_wise_all_property = Property::where('status', "1")
            ->select(
                'city_id',
                DB::raw('COUNT(*) as property_count'),
                DB::raw('MAX(image) as image')
            )->groupBy('city_id')->get();

        $destinationData = HomepageTrendingDestination::all();
        $banner = Banner::first();

        if ($request->ajax()) {
            return response()->json([
                "success" => true,
                "data" => $filter_data,
                "message" => "Properties retrieved successfully."
            ]);
        } else {
            return view('front.index', compact('data', 'city_wise_all_property', 'all_weekend_property_book', 'filter_data', 'check_in', 'check_out', 'adults', 'children', 'rooms', 'destinationData', 'banner'));
        }
    }

    public function search_single_property_by_name(Request $request)
    {
        $propertyName = $request->input('property_name');
        $properties = Property::where('title', 'LIKE', '%' . $propertyName . '%')->get();
        if ($properties->isNotEmpty()) {
            return view('front.trending-destination.index', compact('properties'));
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No properties found.',
                'data' => []
            ]);
        }
    }

    public function trendingDestinationDetails()
    {
        $user = Auth::check();
        if ($user) {
            return view('front.trending-destination.index2');
        } else {
            return redirect('/login');
        }
    }

    public function booking()
    {
        return view('front.booking.index');
    }

    public function bokkingDetails()
    {
        return view('front.booking.index2');
    }


    public function emi()
    {
        return view('front.booking.emi');
    }
    public function carbooking()
    {
        return view('front.booking.carbooking');
    }
    public function carbookingdetails()
    {
        return view('front.booking.details.carbookingdetails');
    }
    public function bikebooking()
    {
        return view('front.booking.bikebooking');
    }

    public function busbooking()
    {
        return view('front.booking.busbooking');
    }

    public function trainbooking()
    {
        return view('front.booking.trainbooking');
    }

    public function about()
    {
        $about_us = AboutUsModel::first();
        return view('front.about', compact('about_us'));
    }


    public function blog()
    {
        return view('front.blog');
    }

    public function term()
    {
        return view('front.term');
    }

    public function career()
    {
        return view('front.career');
    }
    public function contactus()
    {
        return view('front.booking.contactus');
    }

    public function privacy_policy()
    {
        $privacyData = PrivacyPolicyModel::first();
        return view('front.privacy-policy', compact('privacyData'));
    }

    public function terms_and_conditions()
    {
        $data = TearmConditionModel::first();
        return view('front.Terms&Conditions', compact('data'));
    }

    public function monthlystays()
    {
        return view('front.monthlystays');
    }

    public function sitemap()
    {
        return view('front.sitemap');
    }
    public function propertylistingform()
    {
        return view('front.property-listing-form');
    }

    public function propertyListSlug($slug)
    {
        // dd($slug);
        $propertycategory = PropertyCategory::where('slug', $slug)->first();
        $propertys = Property::where('property_category_id', $propertycategory->id)->get();
        if($propertys->isEmpty()){
            return redirect()->back()->with('error','No properties found for this category.');
        }
        return view('front.property-category.index', compact('propertycategory', 'propertys'));
    }

    public function single_propertyListSlug($slug)
    {
        //dd($slug);
        $single_propertys = Property::where('slug', $slug)->first();
        $property_id = $single_propertys->id;
        $propertycategory = PropertyCategory::where('id', $single_propertys->property_category_id)->first();
        $propertys = Property::where('property_category_id', $propertycategory->id)->get();
        $price_tax = TaxRate::where('property_id', $property_id)->first();
        if (Auth::check()) {
            $comments = Comment::where('user_id', Auth::user()->id)->get();
        } else {
            $comments = Comment::where('created_at', '>=', Carbon::now()->subDays(10))
                ->where('is_status', 0)
                ->get();
        }
        return view('front.trending-destination.index2', compact('propertycategory', 'propertys', 'single_propertys', 'price_tax', 'comments'));
    }

    public function propertyListAll()
    {
        $user = Auth::user();
        if ($user) {
            $propertys = Property::all();
            return view('front.property-category.propertyAll', compact('propertys'));
        } else {
            return redirect('/login'); // Fixed typo from 'redirct' to 'redirect'
        }
    }

    public function propertySlug($slug)
    {
        // dd($slug);
        $propertyDetail = Property::where('slug', $slug)->first();
        $propertyDetail->facilities = json_decode($propertyDetail->facilities, true);
        $propertyDetail->image = json_decode($propertyDetail->image, true);

        // dd($propertyDetail);
        return view('front.property.index', compact('propertyDetail'));
    }
    public function showLinkRequestForm()
    {
        return view('front.auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        $status = Password::sendResetLink($request->only('email'));
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __('Password reset link sent!')])
            : back()->withErrors(['email' => __('Unable to send reset link.')]);
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('front.auth.passwords-reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function trendingDestination(Request $req)
    {
        $searchData = $req->get('search_data') ? json_decode($req->get('search_data'), true) : [];
        if (empty($searchData)) {
            return view('front.trending-destination.index');
        }
        $location = isset($searchData['location']) ? $searchData['location'] : null;
        if ($location) {
            $location = explode(',', $location)[0];
            
            $city = City::where('name', 'like', '%' . $location . '%')->first();
            // dd($location,$city);
            if ($city) {
                $properties = Property::where('city_id', $city->id)->where('status','1')->get();
            } else {
                $properties = []; 
            }
        } else {
            $properties = []; 
        }
        // dd($searchData, $location,$properties,$city);
        return view('front.trending-destination.index',compact('properties','searchData'));
    }



    public function all_search_property(Request $request)
    {
        // dd($request->all());
        $location = $request->input('location');
        $check_in = $request->input('start_date');
        $check_out = $request->input('end_date');
        $adults = $request->input('adult_count');
        $children = $request->input('child_count');
        $rooms = $request->input('room_count');
    
        $query = Property::query();
    
        if (!empty($location)) {
            $locationParts = explode(',', $location);
            $cityName = trim($locationParts[0] ?? '');
            $stateName = trim($locationParts[1] ?? '');
            $countryName = trim($locationParts[2] ?? '');
    
            $city = DB::table('cities')->where('name', $cityName)->first();
            $state = DB::table('states')->where('name', $stateName)->first();
            $country = DB::table('countries')->where('name', $countryName)->first();
    
            // Ensure that city is found before applying the filter
            if ($city && $countryName) {
                $query->where('city_id', $city->id);
            }
        }
       
        // Get the filtered data
        $filter_data = $query->get();
    
        // Prepare the search data
        $search_data = [
            "location" => $location,
            "check_in" => $check_in,
            "check_out" => $check_out,
            "adult" => $adults,
            "children" => $children,
            "rooms" => $rooms
        ];
        // dd($search_data);
        // Return JSON response
        return response()->json([
            "success" => true,
            "data" => $filter_data,
            "search_data" => $search_data,
            "message" => "Properties retrieved successfully."
        ]);
    }
    

    public function reset(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required'
        ]);

        $resetStatus = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
        );

        return $resetStatus === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __('Password has been reset!'))
            : back()->withErrors(['email' => __('Unable to reset password.')]);
    }

    public function user_profile()
    {
        $user = Auth::user();
        if ($user) {
            $single_user = User::where('id', $user->id)->first();
            $bookings = DB::table('orders')->where('user_id', $user->id)->get();
            // $bookingDates = DB::table('booking_now')->where('user_id', $user->id)->get();
            // $single_user = UserDetail::where('user_id', $user->id)->first();
            // dd($single_user,$users);
            return view('front.user-profile', compact('single_user', 'bookings'));
        } else {
            return redirect('/login'); // Fixed typo from 'redirct' to 'redirect'
        }
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();

        $user_detail = User::where('id', $user->id)->first();

        if (!$user_detail) {
            $user_detail = new User();
            $user_detail->user_id = $user->id;
        }

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('public/profile_images', $imageName);
            $user_detail->profile_image = $imageName;
        }
        $user_detail->save();

        return redirect()->back()->with('success', 'Image Profile Update Successfully!');
    }


    public function update_profile_other_detail(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'user_name' => 'required',
            // 'password'=>'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        $user = Auth::user();

        // Attempt to find existing user details
        $user_detail = User::where('id', $user->id)->first();
        // dd($user_detail);
        // If user details don't exist, create a new instance
        if (!$user_detail) {
            dd('new');
            $user_detail = new User();

            $user_detail->first_name = $request->first_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->email = $request->email;
            $user_detail->mobile_no = $request->mobile_no;
            $user_detail->user_name = $request->user_name;
            $user_detail->password = bcrypt($request->password);
            $user_detail->country = $request->country;
            $user_detail->state = $request->state;
            $user_detail->city = $request->city;
            $user_detail->address = $request->address;
        } else {
            // dd($request->all());
            $user_detail->first_name = $request->first_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->email = $request->email;
            $user_detail->mobile_no = $request->mobile_no;
            $user_detail->user_name = $request->user_name;
            $user_detail->password = bcrypt($request->password);
            $user_detail->country = $request->country;
            $user_detail->state = $request->state;
            $user_detail->city = $request->city;
            $user_detail->address = $request->address;
        }

        $user_detail->save();

        return redirect()->back()->with('success', 'Profile Update Successfully!');
    }


    public function book_now(Request $request)
    {
        // dd("working");
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        $no_of_adult = $request->no_of_adult;
        $no_of_child = $request->no_of_child;
        $no_of_room = $request->no_of_room;
        $property_id = $request->property_id;


        $no_of_guest = $no_of_child + $no_of_adult;

        $check_in_date = Carbon::parse($check_in);
        $check_out_date = Carbon::parse($check_out);

        $no_of_nights = $check_in_date->diffInDays($check_out_date);

        $propertyDetail = Property::find($property_id);


        $property_price = TaxRate::where('property_id', $property_id)->first();


        if ($property_price) {
            $total_price = $property_price->rate_pr_night * $no_of_nights;
        } else {
            $total_price = 0; // Handle the case where there's no price for this property
        }

        // Pass variables to the view
        return view('front.trending-destination.book_now', compact(
            'check_in',
            'check_out',
            'no_of_adult',
            'no_of_child',
            'no_of_room',
            'property_id',
            'propertyDetail',
            'no_of_guest',
            'no_of_nights',
            'total_price' // Send the total price to the view
        ));
    }


    public function city_wise_property($city_id)
    {
        $city_wise_property = Property::where('city_id', $city_id)->where('status','1')->get();
        return view('front.property-category.city_wise_property', compact('city_wise_property'));
    }



    public function destination_products($id)
    {
        $destination = DB::table('states')->where('id', $id)->first();

        $properties = DB::table('propertys')->where('state_id', $id)->get();

        return view('front.trending-destination.destination_properties', compact('destination', 'properties'));
    }



    // public function search_stay(Request $request)
    // {
    //     $location = $request->input('location');
    //     $check_in = $request->input('check_in');
    //     $check_out = $request->input('check_out');
    //     $adults = $request->input('adults');
    //     $children = $request->input('children');
    //     $rooms = $request->input('rooms');
    //     Property.php
    //     return response()->json(["success"=>"bjknljnkj"]);

    // Process the data (e.g., query the database, filter results, etc.)
    // Example: $results = YourModel::search($location, $check_in, $check_out, $adults, $children, $rooms);

    // Return a view or JSON response
    // return view('your.view.name', compact('results'));
    // }

    public function checkoutSummary(Request $req)
    {
        // dd($req->all());
        $property = Property::find($req->property_id);
        if(!$property){
            return back()->with('error','Property Not Found!');
        }
        $decoedImage = json_decode($property->image, true);
        return view('front.checkout.summary',compact('property','decoedImage'));
    }

    public function storeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);
    
        // Save to DB
        Newsletter::create([
            'email' => $request->email,
        ]);
    
        // Send email
        Mail::send('emails.subscription_confirmation', ['email' => $request->email], function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Thanks for Subscribing!');
        });
    
        return redirect()->back()->with('success', 'Subscribed successfully!');
    }

}
