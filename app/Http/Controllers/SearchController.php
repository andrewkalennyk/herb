<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Vis\Builder\TreeController;

class SearchController
{
    public function doSearch()
    {
        $products = Product::with('category.parent')
            ->search(request()->input('s'))
            ->active()
            ->productDefaultPrices()
            ->get();

        if (request()->method() == 'POST') {
            return [
                'status' => true,
                'products' => $products->map(function ($item, $key) {
                    return [
                        'title' => $item->t('title'),
                        'url' => $item->getUrl()
                    ];
                })->toArray()
            ];
        }

        return view('search.index', compact('products'));
    }
}
