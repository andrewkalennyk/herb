<?php

namespace App\Http\ViewComposers;

use App\Models\InfoBlock;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tree;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CartComposer
{

    public function compose(View $view)
    {
        $content = Cart::content()->map(function ($item, $key) {
            $item->product = Product::find($item->options->product_id);
            return $item;
        });

        $total = Cart::total();

        $view->with(['content' => $content, 'total' => $total]);
    }
}
