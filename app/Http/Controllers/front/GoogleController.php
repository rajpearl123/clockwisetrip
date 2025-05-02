<?php
namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        $query = http_build_query([
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'response_type' => 'code',
            'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
            'access_type' => 'offline',
            'prompt' => 'consent',
        ]);

        return redirect('https://accounts.google.com/o/oauth2/auth?' . $query);
    }


    public function handleGoogleCallback(Request $request)
    {
        $code = $request->get('code');

        // Step 1: Get the access token
        $response = Http::asForm()->post('https://oauth2.googleapis.com/token', [
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'client_secret' => env('GOOGLE_CLIENT_SECRET'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'grant_type' => 'authorization_code',
            'code' => $code,
        ]);

        $tokenData = $response->json();

        if (!isset($tokenData['access_token'])) {
            // return redirect()->route('login')->withErrors('Google login failed.');
            return redirect('/login')->withErrors('Google login failed.');

        }

        // Step 2: Retrieve the user's profile information
        $userResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $tokenData['access_token'],
        ])->get('https://www.googleapis.com/oauth2/v1/userinfo?alt=json');

        $googleUser = $userResponse->json();

        if (!$googleUser || empty($googleUser['email'])) {
            // return redirect()->route('login')->withErrors('Unable to retrieve user information.');
            return redirect('/login')>withErrors('Unable to retrieve user information.');

        }

        // Step 3: Find or create a user in your database
        $user = User::firstOrCreate(
            ['email' => $googleUser['email']],
            [
                'name' => $googleUser['name'],
                'google_id' => $googleUser['id'],
                'password' => bcrypt(str_random(16)),
            ]
        );

        Auth::login($user);

        return redirect()->intended('/home'); 
    }
}

?>