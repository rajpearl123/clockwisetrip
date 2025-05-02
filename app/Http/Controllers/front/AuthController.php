<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Hash;
use Auth;
use App\Models\User;
use App\Models\Property;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request) {
        if ($request->isMethod('get')) {
            return view('front.auth.register');
        } else {
            try {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8',
                    'cpassword' => 'required|same:password',
                ], [
                    'cpassword.required' => 'Please confirm your password.',
                    'cpassword.same' => 'The confirmation password must match the password.',
                ]);
                
    
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password), // Fix here
                    'role' => '1',
                ];
    
                User::create($data);
                return redirect()->route('login')->with('success', 'User Register Successfully!');
            } catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            } catch (\Exception $e) {
                return back()->with('error', 'Warning: ' . $e->getMessage());
            }
        }
    }
    

    public function login(Request $request) {
        if ($request->isMethod('get')) {
            return view('front.auth.login');
        } else {
            try {
                $request->validate([
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|string|min:8',
                ]);
    
                \Log::info('Login attempt: ', ['email' => $request->email]);
    
                $user = User::where('email', $request->email)->first();
    
                if (!$user) {
                    return back()->with('error', 'User does not exist in the record!');
                }
    
                if (Auth::attempt($request->only('email', 'password'))) {
                    $redirectUrl = $request->input('redirect_url');
                    if ($redirectUrl) {
                        return redirect()->to($redirectUrl);
                    }
                    \Log::info('Login successful for: ', ['email' => $request->email]);
                    return redirect('/')->with('success', 'Login successful!');
                } else {
                    \Log::warning('Login failed for: ', ['email' => $request->email]);
                    return back()->with('error', 'Credentials do not match!');
                }
            } catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            } catch (\Exception $e) {
                \Log::error('Login error: ', ['error' => $e->getMessage()]);
                return back()->with('error', 'Warning: ' . $e->getMessage());
            }
        }
    }
    
    
    
    

    public function logout() {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout Successfully!');
    }

    /////// Auth of property
    public function property_register(Request $request) {
        if ($request->isMethod('get')) {
            return view('front.auth.property_register');
        } else {
            try {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8',
                    'cpassword' => 'required|same:password',
                ], [
                    'name.required' => 'Please enter your name.',
                    'name.string' => 'The name must be a string.',
                    'name.max' => 'The name may not be greater than 255 characters.',
                    
                    'email.required' => 'Please enter your email address.',
                    'email.string' => 'The email must be a string.',
                    'email.email' => 'Please enter a valid email address.',
                    'email.max' => 'The email may not be greater than 255 characters.',
                    'email.unique' => 'This email is already registered.',
                    
                    'password.required' => 'Please enter a password.',
                    'password.string' => 'The password must be a string.',
                    'password.min' => 'The password must be at least 8 characters.',
                    
                    'cpassword.required' => 'Please confirm your password.',
                    'cpassword.same' => 'The confirmation password must match the password.',
                ]);
                
    
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password), // Fix here
                    'role' => '1',
                ];
    
                Property::create($data);
                return redirect()->route('property.login')->with('success', 'User Register Successfully!');
            } catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            } catch (\Exception $e) {
                return back()->with('error', 'Warning: ' . $e->getMessage());
            }
        }
    }

    

    public function property_login(Request $request) {
        if ($request->isMethod('get')) {
            return view('front.auth.property_login');
        } else {
            try {
                $request->validate([
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|string|min:8',
                ]);
    
                \Log::info('Login attempt: ', ['email' => $request->email]);
    
                $user = User::where('email', $request->email)->first();
    
                if (!$user) {
                    return back()->with('error', 'User does not exist in the record!');
                }
    
                if (Auth::attempt($request->only('email', 'password'))) {
                    \Log::info('Login successful for: ', ['email' => $request->email]);
                    return redirect()->route('propertyListAll')->with('success', 'Login successful!');
                } else {
                    \Log::warning('Login failed for: ', ['email' => $request->email]);
                    return back()->with('error', 'Credentials do not match!');
                }
            } catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            } catch (\Exception $e) {
                \Log::error('Login error: ', ['error' => $e->getMessage()]);
                return back()->with('error', 'Warning: ' . $e->getMessage());
            }
        }
    }
    
    
    public function property_logout() {
        Auth::logout();
        return redirect('/property-logout')->with('success', 'Logout Successfully!');
    }

    
}