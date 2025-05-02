<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\PropertyWeekendDeal;
use App\Models\TreandingDestination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Validation\Rule;
use App\Models\HomepageTrendingDestination;


class TrendingDestination extends Controller
{
    public function view(){
        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        $cities = DB::table('cities')->get();

        $destinationData = HomepageTrendingDestination::all();

        foreach ($destinationData as $destination) {
            $stateName = DB::table('states')->where('id', $destination->state_id)->value('name');
            $destination->state_name = $stateName; 
        }

        return view('backend.trending-destination.trending-destination', compact('countries','states','cities','destinationData'));
    }
    
    public function add(Request $request){
            $request->validate([
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'image' => 'required',
        ]);

        $destination = new HomepageTrendingDestination();

        $destination->country_id = $request->country;
        $destination->state_id = $request->state;
        $destination->city_id = $request->city;
        $destination->status = 1;
        
        if($request->hasFile('image')){
            $image=$request->image;
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('/images');
            $image->move($path, $filename);

            $destination->image=$filename;
        }
        $destination->save();

        return back();
        
    }
    public function status($id)
    {
        $destination = HomepageTrendingDestination::find($id);
        if ($destination) {
            $destination->status = $destination->status == 1 ? 0 : 1;
            $destination->save();
            return response()->json(['status' => $destination->status]); // Return the new status
        }
        return response()->json(['error' => 'Destination not found'], 404);
    }

    public function edit_view($id){
        $destinationEdit = HomepageTrendingDestination::find($id);
        return view('backend.trending-destination.trending-destination-edit', compact('destinationEdit'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'required',
        ]);
        $destination = HomepageTrendingDestination::find($id);
        if (!$destination) {
            return back()->with('error', 'Destination not found.');
        }
       
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);  
    
            if ($destination->image) {
                unlink(public_path('images/' . $destination->image));  
            }
    
            $destination->image = $imageName;  
        }
    
        $destination->save();
        return redirect()->route('admin.trending-destination');

    }


    public function delete($id){
        $destinationData = HomepageTrendingDestination::find($id);
        $destinationData->delete();
        return back();
    }

    //@getstate
    public function getState($id){
        $states = DB::table('states')->where('country_id', $id)->get(['id', 'name']);
        return response()->json($states);
    }

    //@getcity
    public function getCity($id){
        $states =  DB::table('cities')->where('state_id', $id)->get(['id', 'name']);
        return response()->json($states);
    }

   
}
