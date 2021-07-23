<?php


namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ProfileController
{
    private $user;

    public function __construct()
    {
        $this->user = Sentinel::getUser();
    }

    public function showProfile()
    {
        return view('profile.user', ['user'=> $this->user]);
    }

    public function showOrdersProfile()
    {
        return view('profile.user', compact('user'));
    }

    public function showDiscountProfile()
    {
        return view('profile.user', compact('user'));
    }
}
