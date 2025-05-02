<?php
use App\Models\LogDetails;
use Illuminate\Support\Facades\Request;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Auth;



if (!function_exists('fetchIp')) {
    function fetchIp()
    {
        try {
           
            if (Auth::guard('admin')->check()) {      
                $user = Auth::guard('admin')->user();
                // dd($user->id);
                $data = [
                    'user_id' => $user->id,
                    'ip' => Request::ip(),
                    'time' => Carbon::now(),
                    'type' => '1',
                    'user_type' => 'admin',
                ];
                LogDetails::create($data);
            }
        } catch (\Exception $e) {
            dd('Error logging IP: ' . $e->getMessage());
        }
    }
}

if(!function_exists('fetchIpLogout')){
    function fetchIpLogout(){
        if (Auth::guard('admin')->check()) {     
            $user = Auth::guard('admin')->user();
            $data = [
                'user_id' => $user->id,
                'ip' => Request::ip(),
                'time' => Carbon::now(),
                'type' => '2',
                'user_type' => 'admin',
            ];
            LogDetails::create($data);
        }
    }

}

if (!function_exists('fetchIpVendor')) {
    function fetchIpVendor()
    {
        try {
            if (Auth::guard('vendor')->check()) {
                $user = Auth::guard('vendor')->user();
                $data = [
                    'user_id' => $user->id,
                    'ip' => Request::ip(),
                    'time' => Carbon::now(),
                    'type' => '1', // 1 for login
                    'user_type' => 'vendor',
                ];
                LogDetails::create($data);
            }
        } catch (\Exception $e) {
            dd('Error logging vendor IP: ' . $e->getMessage());
        }
    }
}

if (!function_exists('fetchIpVendorLogout')) {
    function fetchIpVendorLogout()
    {
        try {
            if (Auth::guard('vendor')->check()) {
                $user = Auth::guard('vendor')->user();
                $data = [
                    'user_id' => $user->id,
                    'ip' => Request::ip(),
                    'time' => Carbon::now(),
                    'type' => '2', // 2 for logout
                    'user_type' => 'vendor',
                ];
                LogDetails::create($data);
            }
        } catch (\Exception $e) {
            dd('Error logging vendor logout IP: ' . $e->getMessage());
        }
    }
}
