<?php


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $req){
        try{
            if($req->isMethod('get')){
                // dd(121);
                // dd(Auth::guard('admin')->check());
                return view('backend.auth.login');
    
            }else{
    
                $req->validate([
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
    
                $email = $req->email;
                $password = $req->password;
    
                $admin = Admin::where('email',$email)->first();
                if($admin){
                    if(Auth::guard('admin')->attempt([ 'email' => $email, 'password' => $password ])){
                        fetchIp(); // It is a helper function 
                        return redirect()->route('admin.dashboard')->with('success','Login Successfully!');
                    }else{
                        return back()->with('error','Wrong Credentials!');
                    }    
                }else{
                    return back()->with('error','Record Not Found!');
                }   
                
            }

        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }        
    }

    public function dashboard(){
        // dd(Auth::guard('admin')->user());
        // dd(Auth::guard('admin')->check());
        return view('backend.dashboard');
    }

    public function users(){
        return view('backend.user.index');
    }

    public function logout(){
        fetchIpLogout();
        Auth::guard('admin')->logout();
        session()->flush();
              //  it is a helper function
        // dd('Logged out');
        return redirect()->route('admin.login')->with('error','Logout Successfully!');
    }

    public function vendorLogin(Request $req){

        try{
            if($req->isMethod('get')){
                
                // dd(Auth::guard('admin')->check());
                return view('backend.auth.vendorLogin');
    
            }else{
    
                $req->validate([
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
    
                $email = $req->email;
                $password = $req->password;
    
                $admin = Admin::where('email',$email)->first();
                if($admin){
                    if(Auth::guard('admin')->attempt([ 'email' => $email, 'password' => $password ])){
                        return redirect()->route('admin.dashboard')->with('success','Login Successfully!');
                    }else{
                        return back()->with('error','Wrong Credentials!');
                    }    
                }else{
                    return back()->with('error','Record Not Found!');
                }   
                
            }

        }catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }catch(\Exception $e){
            return back()->with('error', 'Warning : ' .$e->getMessage());
        }

        
    }

}