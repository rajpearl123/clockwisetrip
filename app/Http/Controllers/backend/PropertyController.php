<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\Facility;
use App\Models\PropertyWeekendDeal;
use App\Models\TreandingDestination;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\PropertyVisible;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Validation\Rule;
use Auth;
use Mail;
use Illuminate\Support\Facades\View;


class PropertyController extends Controller
{
    public function propertyCategory(Request $req)
    {
        try {
            if ($req->isMethod('get')) {
                $query = PropertyCategory::query();
                if ($req->has('name') && $req->name != '') {
                    $query->where('name', 'like', '%' . $req->name . '%');
                }
    
                if ($req->has('slug') && $req->slug != '') {
                    $query->where('slug', 'like', '%' . $req->slug . '%');
                }
    
                if ($req->has('status') && $req->status != '') {
                    $query->where('status', $req->status);
                }
                $PropertyCategory = $query->get();          
                return view('backend.property.index', compact('PropertyCategory'));
            } else {
                $req->validate([
                    'name' => 'required|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,jfif',
                    // 'slug' => 'required|string|unique:property_categorys,slug',
                ]);
    
                $propertyCategory = new PropertyCategory();
                $propertyCategory->name = $req->name;
                $propertyCategory->slug = strtolower($req->name);
    
                if ($req->hasFile('image')) {
                    $file = $req->image;
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('front/img/property-category'), $filename);
                    $propertyCategory->image = $filename;
                }
    
                $propertyCategory->save();               
                return back()->with('success', 'Property Category Added Successfully!');
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Warning: ' . $e->getMessage());
        }
    }

    public function propertyCategoryEdit(Request $req){
        // dd($req->all());
        try{   

            $propertyCategory = PropertyCategory::findOrFail($req->id);
                        
            $req->validate([
                'id'   => 'required|numeric|exists:property_categorys',
                'name' => 'required|string',  
                                    
            ]);               
            if($propertyCategory->name != $req->name){
                // dd(121);
                $slug = Str::slug($req->input('name'));

                $data['slug'] = $slug;
                $data['title'] = $req->title;
            }

            $data = [
                'name' =>  $req->name,      
                'status' =>  $req->status,                  
            ];

            if ($req->hasFile('image')) {          
                $file = $req->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('front/img/property-category'),$filename);
                $data['image'] = $filename;
            }
            // dd($data);
            $propertyCategory->update($data);                
            return back()->with('success','Property Category Edit Successfully!');   
           
        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }
    }

    public function propertyCategoryDelete($id){
        // dd($id);
        $propertyCategory = PropertyCategory::findOrFail($id);
        $propertyCategory->delete();
        echo "Delete Successfully";
        return back()->with('error','Property Category Delete Successfully!');   
    }

    public function propertyList(Request $req){
        $query = Property::query();
        if ($req->has('title') && $req->title) {
            $query->where('title', 'LIKE', '%' . $req->title . '%');
        }
        $propertys = $query->paginate(10);
        $facilities = Facility::get();
        $categories = DB::table('property_categorys')->get();
        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        $cities = DB::table('cities')->get();
        // dd($propertys);
        return view('backend.property.index2', compact('propertys','facilities','categories','countries','states','cities'));       
    }

    public function editPropertyDetail($id){
        try{
            $detail = Property::findOrFail($id);
            return response()->json($detail);


        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());       }
   
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

    public function updatePropertyDetail(Request $req){
        // dd($req->all());

        try{
            
            $req->validate([
                'property_id' => 'required|numeric|exists:propertys,id',
                'title' => 'required|string',
                'description' => 'required|string',           
                'facilities' => 'required', 
                'highlights' => 'required', 
                'price' => 'required', 
                // 'tax_rate' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'address' => 'required',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',                   
            ]);

            $property = Property::findOrFail($req->property_id);

            $data = [                
                'description' => $req->description,
                'address'     => $req->address,
                'price'     => $req->price,
                'country_id'     => $req->country_id,
                'state_id'     => $req->state_id,
                'city_id'     => $req->city_id,
                'property_category_id' => $req->property_category_id,
                // 'tax_rate' => $req->tax_rate,
                'facilities' => json_encode($req->facilities),
                'highlights' => json_encode($req->highlights),
            ];

            if($property->title != $req->title){
                $req->validate([                   
                    'slug' => 'required|string|unique:propertys,slug',
                ],
                [
                    'slug' => 'This Title Already Exist In the Database.'
                ]
            );

                $data['slug'] = Str::slug($req->title);
                $data['title'] = $req->title;
            }

            if ($req->hasFile('image')) {   
                $existingImages = json_decode($property->image, true) ?? [];

                $newImages = [];                
                foreach($req->file('image') as $file){
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('front/img/propertys'), $filename);
                    $newImages[] = $filename;
                }
                $data['image'] = json_encode(array_merge($existingImages, $newImages));
            } 

            $property->update($data);
            return back()->with('success', 'Property details updated successfully.');
        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());       }
    }

    public function propertyDetailDelete($id){
        // dd($id);
        $property = Property::findOrFail($id);
        $property->delete();
        echo "Delete Successfully";
        return back()->with('error','Property  Delete Successfully!');   
 
    }
    


    public function weekend_deal()
    {
        $weekend_deal_properties = PropertyWeekendDeal::all();  
        $all_property = Property::where('status', "1")->whereNull('deleted_at')->get();
        return view('backend.property.weekend_deal', compact('all_property','weekend_deal_properties'));
    }



   public function store_weekend_deal(Request $request)
    {
 
        $validatedData = $request->validate([
            'property_id' => [
                'required',
                'exists:propertys,id',

            ],
            'price' => 'required|numeric',
        ]);

        $existingProperty = PropertyWeekendDeal::where('property_id', $validatedData['property_id'])->first();
        if ($existingProperty) {
            return redirect()->back()->with('error', 'Property already has a weekend deal!');
        }

        try {
            $weekendDeal = new PropertyWeekendDeal();
            $weekendDeal->property_id = $validatedData['property_id'];
            $weekendDeal->price = $validatedData['price'];
            $weekendDeal->save();

            return redirect()->back()->with('success', 'Weekend deal successfully saved!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

    
    public function propertyWeekDealDelete($id)
    {
        // dd($id);
        $property = PropertyWeekendDeal::find($id);
        if (!$property) {
            return back()->with('error', 'Property not found in the table!');
        }
        $property->deleted_at = now(); 
        $property->save();

        return back()->with('error', 'Weekend Deal Property deleted successfully!');
    }


    public function getStates($country_id)
    {
        $states = DB::table('states')->where('country_id', $country_id)->get();
        return response()->json($states);
    }

    public function getCities($state_id)
    {
        $cities = DB::table('cities')->where('state_id', $state_id)->get();
        return response()->json($cities);
    }
    

    public function treanding_destination()
    {
        $treanding_destination = TreandingDestination::where('is_deleted',1)->get();

        $all_property=Property::where('status', "1")
            ->get();

        $property_ids = $treanding_destination->pluck('property_id');

        $properties = Property::where('status', "1")
            ->whereIn('id', $property_ids)
            ->get();
        return view('backend.property.treanding_destination', compact('properties','all_property'));
    }


    public function store_treanding_destination(Request $request)
    {
        $validatedData = $request->validate([
            'property_id' => [
                'required',
                'exists:propertys,id',
                Rule::unique('treanding_destination', 'property_id')
            ],
        ]);

        try {
            $treanding_property = new TreandingDestination();
            $treanding_property->property_id = $validatedData['property_id'];
            $treanding_property->save();

            return redirect()->back()->with('success', 'Trending Destination property successfully saved!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function treandingDestinationDelete($id)
    {
        $property = TreandingDestination::where('property_id',$id)->first();

        if (!$property) {
            return back()->with('error', 'Property not found!');
        }

        $property->deleted_at = 0; 
        $property->save();

        return back()->with('success', 'Weekend Deal Property deleted successfully!');
    }
    public function addFacilitiesView(){
        $facilities = Facility::get();
        return view('vendor.add-facilities', compact('facilities'));
    }

    public function addFacility(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $facility = new Facility();
        $facility -> name = $request->name;
        $facility -> status = 1;
        $facility->save();

        return back()->with('success', "Facility Added Successfully");
    }
    public function updateStatus(Request $request, $id){
        $status = $request->status;

        $update = Facility::where('id', $id)->update(['status' => $status]);
        return response()->json(['success' => true]);
    }
    public function deleteFacility($id){
        $facility = Facility::find($id);
        $facility->delete();
        return back()->with('success', 'Facility Deleted Sucessfully.');
    }

    public function propertyAdd(Request $req){
        if($req->isMethod('get')){
            $categorys = PropertyCategory::where('status','1')->get();
            $countrys = Country::all();
            $facilities = Facility::where('status','1')->get();
            return view('backend.property.add', compact('categorys','countrys','facilities'));

        }else{
            // dd($req->all());
           
            $req->validate([
                'image' => 'required|array',
                'property_category_id' => 'required|numeric|exists:property_categorys,id',
                'title' => 'required|string',
                'description' => 'required|string',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'title' => 'required|string',
                'facilities' => 'required|array',     
                'price' => 'required',
                'google_map_link' => 'required',
                'passenger_capacity' => 'required|numeric',                                                     
            ]);

            $property = new Property();
            $property->property_category_id = $req->property_category_id;
            $property->title = $req->title;
            $property->slug = Str::slug($req->title);
            $property->added_by = "admin";
            $property->description = $req->description;
            $property->price = $req->price;
            $property->address = $req->address;
            $property->country_id = $req->country_id;
            $property->state_id = $req->state_id;
            $property->city_id = $req->city_id;
            $property->facilities = json_encode($req->facilities);
            $property->passenger_capacity = $req->passenger_capacity;
            $property->google_map_link = $req->google_map_link;


            if ($req->hasFile('image')) {   
                $imageFilenames = [];
                
                foreach($req->file('image') as $file){
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('front/img/propertys'), $filename);
                    $imageFilenames[] = $filename;
                }
                $property->image = json_encode($imageFilenames);
            }         
            // dd($property->toArray());       
            $property->save();               
            return redirect(route('admin.propertyList'))->with('success','Property Add Successfully!');
        }
    }

    public function propertyEdit($slug){
            $property = Property::where('slug',$slug)->first();
            if(!$property){
                return back()->with('error','Property Not Found!');
            }
            $countrys = Country::all();
            $states = State::all();
            $cities  = City::all();
            $categorys = PropertyCategory::where('status','1')->get();
            $facilities = Facility::where('status','1')->get();
            $decodedImages = json_decode($property->image, true);
            $decodedFacilities = json_decode($property->facilities, true);
            // dd($facilities,$decodedFacilities);
            return view('backend.property.edit', compact('property','countrys','categorys','facilities','decodedImages','states','cities','decodedFacilities'));
    }

    public function propertyUpdate(Request $req){
        $req->validate([
            'property_category_id' => 'required|numeric|exists:property_categorys,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'title' => 'required|string',
            'facilities' => 'required|array',     
            'price' => 'required',
            'google_map_link' => 'required',
            'passenger_capacity' => 'required|numeric',                                                     
        ]);
        $property = Property::findOrFail($req->id);
        if(!$property){
            return back()->with('error','Property Not Found!');
        }
        $property->property_category_id = $req->property_category_id;
        $property->title = $req->title;
        if($property->title != $req->title){
            $property->slug = Str::slug($req->title);
        }
        $property->added_by = "admin";
        $property->description = $req->description;
        $property->price = $req->price;
        $property->address = $req->address;
        $property->country_id = $req->country_id;
        $property->state_id = $req->state_id;
        $property->city_id = $req->city_id;
        $property->facilities = json_encode($req->facilities);
        $property->passenger_capacity = $req->passenger_capacity;
        $property->google_map_link = $req->google_map_link;


        if ($req->hasFile('image')) {  
            $req->validate([
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]); 
            $existingImages = json_decode($property->image, true) ?? [];
            $imageFilenames = [];
            foreach ($req->file('image') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('front/img/propertys'), $filename);
                $newImageFilenames[] = $filename;
            }
            $mergedImages = array_merge($existingImages, $newImageFilenames);
            $property->image = json_encode($mergedImages);
        }         
        // dd($property->toArray());       
        $property->save();               
        return redirect(route('admin.propertyList'))->with('success','Property Edit Successfully!');

    }

    public function propertyupdateStatus(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'property_id' => 'required|numeric',  
            'status' => 'required|boolean',  
        ]);
        $property = Property::findOrFail($request->property_id);
        if(!$property){
            return response()->json([
                'success' => false,
                'message' => 'Property not found.',
            ], 404);
        }
        if($property->added_by == 'vendor'){
            $vendor_id = $property->vendor_id;
            $vendorEmail = $property->vendorDetail->email ?? null;
            $adminEmail = View::shared('adminEmail');
            if (!$vendorEmail || !$adminEmail) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email addresses are not properly configured.',
                ], 400);
            }
            // dd(Auth::guard('admin')->user());
            if($request->status == '1'){
                $propertyExists = PropertyVisible::where('property_id', $property->id)->where('vendor_id', $vendor_id)->first();
                if($propertyExists){
                    $propertyExists->delete();
                }
            }else{
                PropertyVisible::create([
                    'sender_id' => Auth::guard('admin')->user()->id,
                    'vendor_id' => $vendor_id,
                    'property_id' => $property->id,
                    'status'      => $request->status,
                ]);
            }
           
            $subject = 'Property Status Update';
          
            try {
                Mail::send('mails.vendor.property-status', ['property' => $property, 'adminEmail' => $adminEmail], function ($message) use ($subject, $adminEmail, $vendorEmail) {
                    $message->to($adminEmail); 
                    $message->bcc($vendorEmail); 
                    $message->subject($subject);
                });
                \Log::info('Success to send email to ' . $adminEmail .' ' . $vendorEmail);
            } catch (\Exception $mailException) {
                \Log::error('Failed to send email to ' . $adminEmail . '. Error: ' . $mailException->getMessage());
            }
        }
        $property->status = $request->status;
        $property->save();

        return response()->json([
            'success' => true,
            'message' => 'Property status updated successfully',
        ]);
    }

 
    
}
