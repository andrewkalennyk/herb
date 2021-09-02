<?php


namespace App\Http\Controllers;

use App\Events\GeneratePromoEvent;
use App\Models\Order;
use App\Models\Promocode;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ProfileController
{
    public function showProfile()
    {
        return view('profile.user',
            [
                'user' => Sentinel::getUser(),
                'type' => 'profile'
            ]
        );
    }

    public function showOrdersProfile()
    {
        $user = Sentinel::getUser();
        return view('profile.orders',
            [
                'user' => $user,
                'type' => 'orders',
                'orders' => Order::with('order_products')
                    ->user($user->id)
                    ->get()
            ]
        );
    }

    public function showLoyaltyProfile()
    {
        $user = Sentinel::getUser();
        return view('profile.loyalty',
            [
                'user' => $user,
                'type' => 'loyalty',
                'promoCodes' => Promocode::user($user->id)->orderBy('created_at','asc')->get()
            ]
        );
    }

    public function doGeneratePromoCode()
    {
       return [
           'status' => (bool)event(new GeneratePromoEvent()),
           'codes'  => Promocode::user(Sentinel::getUser()->id)->orderBy('created_at','desc')->get(),
       ];
    }
}
