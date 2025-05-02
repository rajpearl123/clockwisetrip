<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\User;
use App\Models\TaxRate;
use App\Models\PrivacyPolicyModel;
use App\Models\TearmConditionModel;
use App\Models\AboutUsModel;
use App\Models\Home;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use App\Models\Otp;
use Illuminate\Support\Facades\Mail;
use Auth;

class OtpController extends Controller
{
    
    // Generate OTP and send via email
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // or phone_number if using SMS
        ]);

        $email = $request->input('email');

        $otp = rand(100000, 999999);

        $otpRecord = Otp::updateOrCreate(
            ['email' => $email],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10),
            ]
        );

        Mail::to($email)->send(new \App\Mail\OtpMail($otp));

        return response()->json([
            'message' => 'OTP sent successfully to your email.',
        ]);
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        $otpRecord = Otp::where('email', $request->email)
                        ->where('otp', $request->otp)
                        ->first();

        if ($otpRecord && now()->lessThanOrEqualTo($otpRecord->expires_at)) {
           
            $otpRecord->delete(); 

            return response()->json([
                'message' => 'OTP verified successfully.',
            ]);
        }
       
       
            return response()->json([
                'message' => 'Invalid or expired OTP.',
            ], 400); 
        
      
    }


    // Resend OTP
    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check if the email exists in the database
        $email = $request->input('email');

        // Check if an OTP record exists for this email and if the OTP has expired
        $otpRecord = Otp::where('email', $email)->first();

        if ($otpRecord && now()->lessThanOrEqualTo($otpRecord->expires_at)) {
            return response()->json([
                'message' => 'OTP has already been sent and is still valid.',
            ]);
        }

        // Generate a new 6-digit OTP
        $otp = rand(100000, 999999);

        // Update or create a new OTP record
        $otpRecord = Otp::updateOrCreate(
            ['email' => $email],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10), // Set expiration to 10 minutes
            ]
        );

        // Send OTP via email (you can customize the email template)
        Mail::to($email)->send(new \App\Mail\OtpMail($otp));

        return response()->json([
            'message' => 'New OTP sent successfully to your email.',
        ]);
    }

    
}
