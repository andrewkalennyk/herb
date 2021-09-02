<?php

namespace App\Http\Controllers\Auth;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class LoginController
{
    public function authenticate(Request $request)
    {
        if (Sentinel::authenticate($request->only('email', 'password'), true)) {
            return ['status' => true];
        }
        return ['status' => false];
    }
}
