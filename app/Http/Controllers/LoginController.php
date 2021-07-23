<?php


namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Sentinel::authenticate($credentials, true)) {
            return ['status' => true];
        }

        return ['status' => false];
    }
}
