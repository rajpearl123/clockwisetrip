<?php
namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class FacebookController extends Controller
{
    // Redirect to Facebook's OAuth
    public function redirectToFacebook()
    {
        $query = http_build_query([
            'client_id' => env('FACEBOOK_CLIENT_ID'),
            'redirect_uri' => env('FACEBOOK_REDIRECT_URI'),
            'response_type' => 'code',
            'scope' => 'email', // Permissions required (add others if needed)
        ]);

        return redirect('https://www.facebook.com/v12.0/dialog/oauth?' . $query);
    }

    // Handle the callback from Facebook
    public function handleFacebookCallback(Request $request)
    {
        $code = $request->get('code');

        // Step 1: Exchange the code for an access token
        $response = Http::asForm()->post('https://graph.facebook.com/v12.0/oauth/access_token', [
            'client_id' => env('FACEBOOK_CLIENT_ID'),
            'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
            'redirect_uri' => env('FACEBOOK_REDIRECT_URI'),
            'code' => $code,
        ]);

        $tokenData = $response->json();

        if (!isset($tokenData['access_token'])) {
            return redirect('/login')->withErrors('Facebook login failed.');
        }

        // Step 2: Use the access token to get user info
        $userResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $tokenData['access_token'],
        ])->get('https://graph.facebook.com/me?fields=id,name,email');

        $facebookUser = $userResponse->json();

        if (!$facebookUser || empty($facebookUser['email'])) {
            return redirect('/login')->withErrors('Unable to retrieve user information.');
        }

        // Step 3: Find or create a user in the database
        $user = User::firstOrCreate(
            ['email' => $facebookUser['email']],
            [
                'name' => $facebookUser['name'],
                'facebook_id' => $facebookUser['id'],
                'password' => 12345678,
            ]
        );

        Auth::login($user);

        return redirect()->intended('/home');  // Adjust as needed
    
}
}
?>