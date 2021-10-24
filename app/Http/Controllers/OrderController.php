<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderCartEvent;
use App\Events\RepeatOrderEvent;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\UsePromoRequest;
use App\Models\Order;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Vis\Builder\TreeController;

class OrderController extends TreeController
{
    public function showCheckout()
    {
        $cart = Cart::content();
        $discount = Cart::discount();
        $total = number_format(Cart::priceTotal(), 0);
        $discountTotal = Cart::total();

        $user = Sentinel::getUser();

        if (!$total) {
            return redirect('/');
        }

        return view('order.checkout', compact('cart', 'total', 'user', 'discount', 'discountTotal'));
    }

    public function doOrder(OrderRequest $request): array
    {
        return [
            'status' => (bool)event(new CreateOrderCartEvent(Order::create($request->all())))
        ];
    }

    public function doRepeatOrder(Request $request): array
    {
        return [
            'status' => (bool)event(new RepeatOrderEvent($request->input('orderId')))
        ];
    }

    public function doUseCode(UsePromoRequest $request): array
    {
        Cart::setGlobalDiscount($request->promo->discount);
        Cookie::queue('promo_code', $request->promo->code);
        return [
            'status' => true,
            'total' => Cart::total()
        ];
    }
}
