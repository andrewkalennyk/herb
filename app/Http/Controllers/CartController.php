<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Vis\Builder\TreeController;

class CartController extends TreeController
{
    /*
     * show index page site
     */
    public function addToCart()
    {

        $data = request()->input();

        $product = Product::with(['product_price' => function ($q) use ($data) {
            return $q->where('id', data_get($data, 'priceId'));
        }])
            ->where('id', data_get($data, 'productId'))
            ->first();

        $cart = Cart::add([
            'id' => data_get($data, 'priceId'),
            'name' => $product->t('title'),
            'qty' => 1,
            'price' => $product->product_price->price,
            'weight' => $product->product_price->unit_value,
            'options' => [
                'unit_type' => $product->product_price->unit_type,
                'product_id'  => data_get($data, 'productId')
            ]
        ]);

        $content = Cart::content()->map(function ($item, $key) {
            $item->product = Product::find($item->options->product_id);
            return $item;
        });

        $cartView = view('popups.partials.cart_items')->with('items', $content)->render();

        return [
            'status'    => true,
            'rowId'     => $cart->rowId,
            'total'     => Cart::total(),
            'cartView'  => $cartView,
            'qty'       => 1
        ];

    }

    public function changeCartQty() {

        Cart::update(request()->input('rowId'), request()->input('qty'));

        $content = Cart::content()->map(function ($item, $key) {
            $item->product = Product::find($item->options->product_id);
            return $item;
        });

        $cartView = view('popups.partials.cart_items')->with('items', $content)->render();


        return [
            'status' => true,
            'cartView'  => $cartView,
            'total'     => Cart::total(),
            'carContent' => Cart::content(),
        ];
    }

    public function deleteItem() {

        Cart::remove(request()->input('rowId'));

        $content = Cart::content()->map(function ($item, $key) {
            $item->product = Product::find($item->options->product_id);
            return $item;
        });

        $cartView = view('popups.partials.cart_items')->with('items', $content)->render();

        return [
            'status' => true,
            'cartView'  => $cartView,
            'total'     => Cart::total(),
            'carContent' => Cart::content(),
        ];
    }
}
