<?php


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Facility;
use App\Models\Property;
use Hash;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class VendorController extends Controller
{

    public function vendorLogin(Request $req){
        try{
            if($req->isMethod('get')){
                // dd(Auth::guard('admin')->check());
                return view('backend.vendor.auth.vendorLogin');
            }else{
                $req->validate([
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
                $email = $req->email;
                $password = $req->password;
                // $vendor = Vendor::where('email',$email)->where('status','0')->first();
                $vendor = Vendor::where('email',$email)->first();
                if($vendor){
                    if(Auth::guard('vendor')->attempt([ 'email' => $email, 'password' => $password ])){
                        fetchIpVendor();
                        return redirect()->route('vendor.dashboard')->with('success','Login Successfully!');
                    }else{
                        return back()->with('error','Wrong Credentials!');
                    }    
                }else{
                    return back()->with('error','Account Not Approved Yet!');
                }             
            }
        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }
    }

    public function logout(){
        fetchIpVendorLogout();
        Auth::guard('vendor')->logout();
        session()->flush();
        return redirect()->route('vendor.login')->with('error','Logout Successfully!');

    }

    public function vendorRegister(Request $req){

        try{
            if($req->isMethod('get')){
                
                // dd(Auth::guard('admin')->check());
                return view('backend.vendor.auth.vendor-register');
    
            }else{
                $req->validate([
                    'name'  => 'required|string',
                    'email' => 'required|email|unique:vendors',
                    'mobile_no' => 'required',
                    'password' => 'required'
                ],
                [
                    'email.required' => 'The email field is required.',
                    'email.email' => 'Please provide a valid email address.',
                    'email.unique' => 'This email address is already exists.',
                ]);
                $vendor = new Vendor();
                $vendor->name = $req->name;
                $vendor->email = $req->email;
                $vendor->mobile_no = $req->mobile_no;
                $vendor->password = Hash::make($req->password);
                $vendor->save();

                $subject = 'Vendor Registration Mail';
                $email = $req->email;
                $name = $req->name;
    
                try {
                    Mail::send('mails.vendor-registration', ['name' => $name], function($message) use ($subject, $email) {
                        $message->to($email);
                        $message->subject($subject);
                    });        
                    Log::channel('email')->info('Email Send Successfully', ['email' => $email]);
                   
                } catch (\Exception $mailException) {
                    Log::channel('email')->error('Email Failed', [
                        'error' => $mailException->getMessage()
                    ]);
                    return back()->with('error', 'Warning : ' .$mailException->getMessage());
                }


                return redirect()->route('vendor.login')->with('success','Vendor Register Successfully!');             
                
            }

        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }        
    }

    public function dashboard(){
        $properties = Property::where('vendor_id', Auth::guard('vendor')->user()->id)->count();
        return view('backend.vendor.dashboard',compact('properties'));
    }

    public function profile(Request $req){
        if($req->isMethod('get')){
            $vendorId = Auth::guard('vendor')->user()->id;
            $vendor = Vendor::find($vendorId);
            return view('backend.vendor.profile', compact('vendor'));

        }else{
            $req->validate([
                'name' => 'required',
                'email' => 'required|email',
                'mobile_no' => 'required',
                'aadhar_number' => 'required',
                'aadhar_image' => 'required',
                'pan_card' => 'required',
                'pan_image' => 'required',
                // 'pin_code' => 'required',
                // 'state' => 'required',
                // 'city' => 'required',
                // 'account_holder_name' => 'required',
                // 'bank_address' => 'required',
                // 'ifsc_code' => 'required',
                // 'account_no' => 'required',
                // 'account_type' => 'required',
            ]);
            $vendorId = Auth::guard('vendor')->user()->id;
            $data = Vendor::find($vendorId);

            if($req->hasFile('image')){
                $image=$req->image;
                $filename=date('Y-m-d') .'-'. $image->getClientOriginalExtension();
                $path=public_path('images/vendor/profile');
                $image->move($path, $filename);
    
                $data->image=$filename;
            }
            $data->name = $req->name;
            $data->email = $req->email;
            $data->mobile_no = $req->mobile_no;
            $data->aadhar_number = $req->aadhar_number;
            if ($req->hasFile('aadhar_image')) {
                $aadhar_image = $req->file('aadhar_image');
                $filename = date('Y-m-d') . '.' . $aadhar_image->getClientOriginalExtension();
                $path = public_path('images/vendor/documents');
                $aadhar_image->move($path, $filename);
                $data->aadhar_image = $filename;
            }
            $data->pan_card = $req->pan_card;
            if ($req->hasFile('pan_image')) {
                $pan_image = $req->file('pan_image'); 
                $filename = date('Y-m-d') . '.' . $pan_image->getClientOriginalExtension(); 
                $path = public_path('images/vendor/documents');
                $pan_image->move($path, $filename);
                $data->pan_image = $filename; 
            }
            // $data->pin_code = $req->pin_code;
            // $data->state = $req->state;
            // $data->city = $req->city;
            // $data->account_holder_name = $req->account_holder_name;
            // $data->bank_address = $req->bank_address;
            // $data->ifsc_code = $req->ifsc_code;
            // $data->account_no = $req->account_no;
            // $data->account_type = $req->account_type;
            $data->save();
            
            return back()->with('success','Profile Updated Successfully!');
        }

    }
    public function vendorList(){
        $vendors = Vendor::all();
        return view('backend.vendor.list', compact('vendors'));
    }
    public function addVendor(Request $req){
        $req->validate([
            'name'  => 'required|string',
            'email' => 'required|email|unique:vendors',
            'mobile_no' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email address is already exists.',
        ]);
        $vendor = new Vendor();
        $vendor->name = $req->name;
        $vendor->email = $req->email;
        $vendor->mobile_no = $req->mobile_no;
        $vendor->password = Hash::make($req->password);
        $vendor->save();

        $subject = 'Vendor Registration Mail';
        $email = $req->email;
        $name = $req->name;

        try {
            Mail::send('mails.vendor-registration', ['name' => $name], function($message) use ($subject, $email) {
                $message->to($email);
                $message->subject($subject);
            });        
            Log::channel('email')->info('Email Send Successfully', ['email' => $email]);
           
        } catch (\Exception $mailException) {
            Log::channel('email')->error('Email Failed', [
                'error' => $mailException->getMessage()
            ]);
            return back()->with('error', 'Warning : ' .$mailException->getMessage());
        }
        return back()->with('success','Vendor Added Successfully!');             
    }

    public function vendorView($id){
        $vendor  = Vendor::where('id',$id)->first();
        $properties = Property::where('vendor_id', $id)->where('added_by', 'vendor')->paginate(10);;

        foreach($properties as $property){
            $category = DB::table('property_categorys')->where('id', $property->property_category_id)->first();
            $property->category_name = $category ? $category->name : 'N/A';
        }
        return view('backend.vendor.vendor-view', compact('vendor','properties'));
    }

    public function vendorPropertyStatus(Request $request, $id){
        $status = $request->status;
        $property = Property::where('id', $id)->update(['status' => $status]);
        return back()->with('success', 'Status Changed Successfully.');
    }
    public function vendorStatusUpdate(Request $request, $id)
    {
        $status = $request->status;
        $update = Vendor::where('id', $id)->update(['status' => $status]);
        $vendor = Vendor::where('id', $id)->first();
        $email = $vendor->email;
        $name = $vendor->name;

        if($status == 0){
            $subject = "Account Approved";
            Mail::send('backend.emails.vendor-status-mail', ['name' => $name, 'status' =>$status], function($message) use ($subject, $email) {
                $message->to($email);
                $message->subject($subject);
            });
        }else{
            $subject = "Account Suspended";
            Mail::send('backend.emails.vendor-status-mail', ['name' => $name, 'status' =>$status], function($message) use ($subject, $email) {
                $message->to($email);
                $message->subject($subject);
            });
        }
        return back()->with('success', "Status Changed Successfully");
    }
    public function deleteVendor($id){
        $vendor = Vendor::find($id);
        $vendor->delete();
        return back()->with('success', 'Vendor Deleted Successfully');
    }

    public function vendorPropertyView($id){
        $property = Property::where('id', $id)->first();
        $property->highlights = json_decode($property->highlights);
   
        $property->facilities = json_decode($property->facilities);
        $facilityNames = \DB::table('facilities')
        ->whereIn('id', $property->facilities) 
        ->pluck('name') 
        ->toArray();
        $property->images = json_decode($property->image);

        $category = DB::table('property_categorys')->where('id', $property->property_category_id)->first();
        return view('backend.admin.vendor.property-view', compact('property','category','facilityNames'));
    }

       
}