<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;

use App\Models\Facility;
use App\Models\User;
use App\Models\PropertyPrice;
use App\Models\Property;
use App\Models\PropertyVisible;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PropertyController extends Controller
{
    public function vendor()
    {
        return view('backend.vendor.property.index');
    }

    public function addView(){
        $categories = DB::table('property_categorys')->get();
        $countries = DB::table('countries')->get();
        $facilities = Facility::where('status', 0)->get();
        
        return view('backend.vendor.property.add-property', compact('categories', 'countries', 'facilities'));
    }

    public function propertyListView(){
        $vendorId = Auth::guard('vendor')->user()->id;
        $properties = Property::where('vendor_id' , $vendorId)->get();

        return view('backend.vendor.property.property-list', compact('properties'));
    }
    public function propertyView($id){
        $property = Property::where('id', $id)->first();
        $property->highlights = json_decode($property->highlights);
        // $highlightNames = \DB::table('facilities')
        //     ->whereIn('id', $property->highlights) 
        //     ->pluck('name') 
        //     ->toArray(); 
        $property->facilities = json_decode($property->facilities);
        $facilityNames = \DB::table('facilities')
            ->whereIn('id', $property->facilities) 
            ->pluck('name') 
            ->toArray();
        $property->images = json_decode($property->image);
        $categories = DB::table('property_categorys')->get();

        $category = DB::table('property_categorys')->where('id', $property->property_category_id)->first();
        return view('backend.vendor.property.property-view', compact('property','category','categories', 'facilityNames'));
    }
    public function addProperty(Request $request)
    {
        $validated = $request->validate([
            'property_category_id' => 'required|exists:property_categorys,id',
            'title' => 'required|unique:propertys,title|max:255',
            'description' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required',
            'price' => 'required|numeric|min:1',
            'facilities' => 'required',
            'sleep_options' => 'required',
            'bed_type' => 'required',
            'passenger_capacity' => 'required|min:1',
            'bathrooms' => 'required|min:1',
            'children_allowed' => 'required|in:yes,no',
            'breakfast' => 'required|in:yes,no',
            'parking' => 'required|in:yes,no',
            'staff_language' => 'required|array',
            'staff_language.*' => 'string|max:255',
            'check_in_time' => 'required|date_format:H:i',
            'check_out_time' => 'required|date_format:H:i',
            'image.*' => 'required',
           
        ]);

        try {
            // Get the vendor ID
            $vendorId = Auth::guard('vendor')->user()->id;
        
        
            // Create the property
            $property = new Property();
            
            $property->property_category_id = $request->property_category_id;
            $property->title = $request->title;
            $property->added_by = "vendor";
            $property->vendor_id = $vendorId;
            $property->description = $request->description;
            $property->price = $request->price;
            $property->slug = Str::slug($request->title, '-');
            $property->address = $request->address;
            $property->country_id = $request->country_id;
            $property->state_id = $request->state_id;
            $property->city_id = $request->city_id;
            $property->facilities = json_encode($request->facilities);
            $property->sleep_options = $request->sleep_options;
            $property->bed_type = $request->bed_type;
            $property->passenger_capacity = $request->passenger_capacity;
            $property->google_map_link = $request->google_map_link;
            $property->bathrooms = $request->bathrooms;
            $property->children_allowed = $request->children_allowed;
            $property->breakfast = $request->breakfast;
            $property->parking = $request->parking;
            $property->staff_language = json_encode($request->staff_language);
            $property->check_in_time = $request->check_in_time;
            $property->check_out_time = $request->check_out_time;
            $property->smoking = $request->smoking;
            $property->pets = $request->pets;
            $property->parties = $request->parties;
            $property->gst_number = $request->gst_number;
            $property->status = 0;
           
        
            if ($request->hasFile('image')) { 
                $uploadedImages = [];
                foreach ($request->file('image') as $image) { 
                    $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension(); 
                    $path = public_path('/front/img/propertys/');
                    $image->move($path, $fileName);
                    $uploadedImages[] = $fileName;
                }
                $property->image = json_encode($uploadedImages);
            }  
            $property->save();
        
            return back()->with('success', 'Property added successfully.');
        } catch (\Exception $e) {
            \Log::error('Error adding property: ' . $e->getMessage());
            return back()->withErrors('An error occurred while adding the property. Please try again.');
        }        
    }
    


    public function statusUpdate(Request $request, $id){
        $status =$request->status;
        $property = Property::where('id', $id)->update(['status' => $status]);

        return back();
    }

    public function editPropertyView($id){
        $property = Property::where('id', $id)->first();
        $categories = DB::table('property_categorys')->get();
        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        $cities = DB::table('cities')->get();
        $facilities = Facility::get();
        $selectedFacilities = $property->facilities 
        ? json_decode($property->facilities, true) 
        : [];
        // $selectedHighlights = $property->highlights 
        // ? json_decode($property->highlights, true) 
        // : [];
        $decodedImages = json_decode($property->image, true);

        return view('backend.vendor.property.edit-property', compact('property','categories','countries','states','cities','facilities','selectedFacilities','decodedImages'));
    }
    public function removePropertyImage(Request $req){
        // dd($req->all());

        $image = $req->input('image');
        $propertyId = $req->input('property_id');
        $index = $req->input('index');

        $req->validate([
            'image' => 'required|string',
            'property_id' => 'required|integer',
        ]);

        $property = Property::find($propertyId);
        if($property){
            $t1 = json_decode($property->image, true);
            unset($t1[$index]);
            $t1 = array_values($t1);
            $property->update(['image' => json_encode($t1) ]);   
            Storage::disk('public')->delete('front/img/propertys/' . $image); 
            return response()->json(['success' => true]);


        }else{
            return response()->json(['success' => false, 'message' => 'Image index not found.'], 404);
        }

        return response()->json([
                        'success' => false,
                        'message' => 'Property not found.'
            ], 404);

    }
    
    public function editProperty(Request $request, $id){
        
        $request->validate([
            'property_category_id' => 'required',
            'title' => 'required',            
            'address' => 'required',
            'price' => 'required',
            'facility_id' => 'required',
        ]);
        $vendorId = Auth::guard('vendor')->user()->id;
        $property = Property::find($id);
        if ($request->hasFile('image')) { 
            $uploadedImages = [];
            foreach ($request->file('image') as $image) { 
                $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension(); 
                $path = public_path('/front/img/propertys/');
                $image->move($path, $fileName);
                $uploadedImages[] = $fileName;
            }
            $property->image = json_encode($uploadedImages);
        }  

        $property->property_category_id = $request->property_category_id;
        $property->title = $request->title;
        $property->added_by = "vendor";
        $property->vendor_id = $vendorId;
        // $property->description = $request->description;
        $property->price = $request->price;
        $property->slug = Str::slug($request->title);
        $property->tax_rate = $request->tax_rate;
        $property->address = $request->address;
        // $property->country_id = $request->country_id;
        // $property->state_id = $request->state_id;
        // $property->city_id = $request->city_id;
        $property->facilities = json_encode($request->facility_id);
        // $property->highlights = json_encode($request->highlights_id);
        $property->update();
        return back()->with('success', 'Property Added Successfully');
    }

    public function deleteProperty($id){
        $property = Property::where('id', $id)->first();
        // dd($property);

        if($property != null){
            $property->delete();
            return back()->with('error','Propert Delete Successfully');
        }else{
            return back()->with('error','Propert Not Found');
        }    
    }

    public function getState($id){
        $states = DB::table('states')->where('country_id', $id)->get(['id', 'name']);
        return response()->json($states);
    }

    public function getCity($id){
        $cities = DB::table('cities')->where('state_id', $id)->get(['id', 'name']);
        return response()->json($cities);
    }

    public function propertPrice($id){
        $property = Property::where('id', $id)->first();
        $propertPrices = PropertyPrice::all();
        if($property != null){
            return view('backend.vendor.property.price', compact('property','propertPrices'));

        }else{
            return back()->with('error','Propert Not Found');
        }
    }

    public function propertPriceStore(Request $req){
        // dd($req->all());
        $req->validate([
            'date' => 'required|date',
            'price' => 'required|numeric',
            'property_id' => 'required|numeric',
        ]);
        $vendorId = Auth::guard('vendor')->user()->id;
        PropertyPrice::create([
            'property_id' =>  $req->property_id,
            'user_id' =>  $vendorId,
            'type' =>  '1',
            'date' =>  $req->date,
            'price' =>  $req->price,
        ]);
        return back()->with('success','Price Add Successfully!');
    }

    public function propertPriceUpdate(Request $req){
        // dd($req->all());
        $req->validate([
            'date' => 'required|date',
            'price' => 'required|numeric',
            'property_id' => 'required|numeric',
        ]);
        $vendorId = Auth::guard('vendor')->user()->id;
        $propertPrice = PropertyPrice::where('id',$req->property_prices_table_id)->first();
        if($propertPrice != null){
            $propertPrice->update([
                'date' => $req->date,
                'price' => $req->price,
            ]);    
            return back()->with('success','Price Details Update Successfully!');
        }else{
            return back()->with('error','Price Details Not Found!');
        }
      
    }

    public function propertPriceDelete($id){
        // dd($id);
        $propertPrice = PropertyPrice::where('id',$id)->first();
        if($propertPrice != null){
            $propertPrice->delete();
            return back()->with('error','Price Details Delete Successfully!');

        }else{
            return back()->with('error','Price Details Not Found!');

        }
    }

    public function propertyupdateStatus(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'property_id' => 'required|numeric',  
            'status' => 'required|boolean',  
        ]);
        $propertyExist = PropertyVisible::where('property_id', $request->property_id)->first();
        if($propertyExist){
            return response()->json([
                'success' => false,
                'message' => 'You do not update status,please Connect With Admin!',
            ],400);
        }           
       
        $property = Property::findOrFail($request->property_id);
        if(!$property){
            return response()->json([
                'success' => false,
                'message' => 'Property not found.',
            ], 404);
        }
        $property->status = $request->status;
        $property->save();

        return response()->json([
            'success' => true,
            'message' => 'Property status updated successfully',
        ]);
        
    }
    
    
}
