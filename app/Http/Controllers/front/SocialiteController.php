<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->createOrGetUser($user);
        return redirect()->to('/home');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->createOrGetUser($user);
        return redirect()->to('/home');
    }

    private function createOrGetUser($socialUser)
    {
        $authUser = User::where('provider_id', $socialUser->id)
                        ->where('provider', $socialUser->provider)
                        ->first();

        if ($authUser) {
            return Auth::login($authUser, true);
        } else {
            $authUser = User::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'provider' => $socialUser->provider,
                'provider_id' => $socialUser->id,
            ]);

            Auth::login($authUser, true);
        }
    }
}