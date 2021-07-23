<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Vis\Builder\TreeController;

class OrderController extends TreeController
{
    /*
     * show index page site
     */
    public function showCheckout()
    {
        $cart = Cart::content();
        $total = number_format(Cart::total(), 0);

        if (!$total) {
            return redirect('/');
        }

        return view('order.checkout', compact('cart', 'total'));
    }

    public function doOrder(OrderRequest $request)
    {
        return [
            'status' => $request->apply() ? true : false
        ];
    }
}
