<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Auth;


class AdminController extends Controller
{
    public function usersList(Request $request)
    {
        try {
            $query = User::query();
            $query->where('status', '1');
            if ($request->has('search') && $request->search != '') {
                $searchTerm = $request->search;
                $query->where(function($q) use ($searchTerm) {
                    $q->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $searchTerm . '%')
                    ->orWhere('mobile_no', 'like', '%' . $searchTerm . '%');
                });
            }
            $users = $query->get();

            return view('backend.user.index', compact('users'));

        } catch (\Exception $e) {
            return back()->with('error', 'Warning : ' . $e->getMessage());
        }
    }


    
//     public function user_change_Status(Request $request, $id)
// {
//     $user = User::find($id);
//     if ($user) {
//         $user->status = $user->status == '1' ? '0' : '1';
//         $user->save();

//         return response()->json(['success' => true, 'status' =>'Change Status Successfully']);
//     }

//     return response()->json(['success' => false, 'message' => 'User not found.']);
// }

public function user_change_Status(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'status' => 'required|in:0,1',
        ]);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }


    public function userDelete($id){
        // dd($id);
        $user = User::findOrFail($id);
        $user->delete();
        echo "Delete Successfully";
        return back()->with('error','User Delete Successfully!');   
 
    }

    
    public function userAdd(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile_no' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Send the welcome email
        Mail::to($user->email)->send(new WelcomeEmail($user));

        // Redirect or return response
        return redirect()->route('admin.users.list')->with('success', 'User added successfully!');
    }
    public function userUpdate(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile_no' => 'required|string|max:15', 
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();
        return redirect()->back()->with('success', 'User updated successfully.');
    }


    public function userProfile()
    {
        $user = Admin::first();
        if (!$user) {
            return redirect()->route('admin.login'); 
        }
    
        $single_user = UserDetail::where('user_id', $user->id)->first();
    
        return view('backend.user.profile', compact('single_user'));
    }
    

    public function uploadImage(Request $request){
        $request->validate([
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user = Admin::first();
        $user_detail = UserDetail::where('user_id', $user->id)->first();
       
        if (!$user_detail) {
            $user_detail = new UserDetail();
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

    public function storeOtherInformation(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'mobile_no'=>'required',
            // 'user_name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            // 'password'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address'=>'required',
        ]);

        $user = Admin::first();

        // Attempt to find existing user details
        $user_detail = UserDetail::where('user_id', $user->id)->first();
        
        // If user details don't exist, create a new instance
        if (!$user_detail) {
            $user_detail = new UserDetail();
            $user_detail->user_id = $user->id;
            $user_detail->first_name = $request->first_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->email = $request->email;
            $user_detail->mobile = $request->mobile_no;
            $user_detail->user_name = $request->user_name;
             $user_detail->password = bcrypt($request->password);
            $user_detail->country = $request->country;
            $user_detail->state = $request->state;
            $user_detail->city = $request->city;
            $user_detail->address = $request->address;
            $user_detail->gender = $request->gender;
            $user_detail->dob = $request->dob;
        }else{
            $user_detail->user_id = $user->id;
            $user_detail->first_name = $request->first_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->email = $request->email;
            $user_detail->mobile = $request->mobile_no;
            $user_detail->user_name = $request->user_name;
             $user_detail->password = bcrypt($request->password);
            $user_detail->country = $request->country;
            $user_detail->state = $request->state;
            $user_detail->city = $request->city;
            $user_detail->address = $request->address;
            $user_detail->gender = $request->gender;
            $user_detail->dob = $request->dob;
        }
        
        $user_detail->save();
    
        return redirect()->back()->with('success', 'Profile Update Successfully!');
    }
    
    
    

    
}
