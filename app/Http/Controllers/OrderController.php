<?php

namespace App\Http\Controllers;

use App\Events\RepeatOrderEvent;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Vis\Builder\TreeController;

class OrderController extends TreeController
{
    public function showCheckout()
    {
        $cart = Cart::content();
        $total = number_format(Cart::total(), 0);

        $user = Sentinel::getUser();

        if (!$total) {
            return redirect('/');
        }

        return view('order.checkout', compact('cart', 'total', 'user'));
    }

    public function doOrder(OrderRequest $request): array
    {
        return [
            'status' => $request->apply()
        ];
    }

    public function doRepeatOrder(Request $request): array
    {
        return [
            'status' => (bool)event(new RepeatOrderEvent($request->input('orderId')))
        ];
    }
}
