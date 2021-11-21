<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class FacebookController
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $userFb = Socialite::driver('facebook')->user();

            $isUser = User::where('fb_id', $userFb->id)->first();

            if ($isUser) {
                Sentinel::login($isUser);
                return redirect('/profile');
            } else {
                $user = User::where('email', $userFb->email)->first();

                if ($user) {
                    $user->fb_id = $userFb->id;
                    $user->save();
                } else {
                    $user = Sentinel::registerAndActivate([
                        'name' => $userFb->name,
                        'email' => $userFb->email,
                        'first_name' => $userFb->name,
                        'last_name' => '',
                        'fb_id' => $userFb->id,
                        'password' => Hash::make($userFb->name . $userFb->id)
                    ]);
                }

                Sentinel::login($user);
                return redirect('/profile');
            }
        } catch (Exception $exception) {
            \Log::info($exception->getMessage());
        }
    }

}
