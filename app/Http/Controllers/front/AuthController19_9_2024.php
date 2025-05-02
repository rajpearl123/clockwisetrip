<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Hash;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $req){

        if($req->isMethod('get')){
            return view('front.auth.register');
        }else{

            // dd($req->all());
            try{

                $req->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                ]);

                $data = [
                    'name' => $req->name,
                    'email' => $req->email,
                    'password' => Hash::make($req->email),
                    'role'     => '1',
                ];
    
                User::create($data);
                return back()->with('success','User Register Successfully!');

            }catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            }catch(\Exception $e){
                return back()->with('error', 'Warning : ' .$e->getMessage());
            }

        }
    }

    public function login(Request $req){

        if($req->isMethod('get')){
            return view('front.auth.login');
        }else{

            // dd($req->all());
            try{

                $req->validate([
                    'email' => 'required|string|email|max:255',
                    'password' => 'required',
                ]);
                
               $user = User::where('email',$req->email)->first();
               if($user){

                if(Auth::attempt([ 'email' => $req->email, 'password' => $req->password ])){
                        return redirect('/')->with('success','Login Successfully!');

                }else{
                    return back()->with('error','Credentials Do not Match!');
                }
               }else{
                return back()->with('error','User Does Not Exist In The Record!');
               }
    
                User::create($data);
                return back()->with('success','User Register Successfully!');

            }catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            }catch(\Exception $e){
                return back()->with('error', 'Warning : ' .$e->getMessage());
            }

        }
    }

    public function logout(){
        Auth::logout();
        return back()->with('success','Logout Successfully!');
    }
}