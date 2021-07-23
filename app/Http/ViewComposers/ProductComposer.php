<?php

namespace App\Http\ViewComposers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\View\View;

class ProductComposer
{

    public function compose(View $view)
    {
        $product = data_get($view->getData(), 'product');
        $cart = Cart::content();
        $product->is_in_cart = $cart->where('id',$product->id)->count() ? 1 : 0;

        $view->with(['product'=> $product]);
    }
}
