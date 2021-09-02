<?php

namespace App\Listeners;

use App\Events\RepeatOrderEvent;
use App\Models\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;

class RepeatOrder
{

    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {
        Cart::destroy();
    }

    /**
     * Handle the event.
     *
     * @param  RepeatOrderEvent  $event
     * @return void
     */
    public function handle(RepeatOrderEvent $event)
    {
        $products = OrderProduct::with('product.product_prices')->byOrder($event->orderId)->get();

        foreach ($products as $product) {

            $price = $product->product->product_prices->filter(function ($item) use($product) {
                return $item->unit_type == $product->unit_type &&
                    $item->unit_value == $product->weight &&
                    $item->is_active == 1;
            })->first();

            Cart::add([
                'id' => $price->id,
                'name' => $product->product->t('title'),
                'qty' => $product->qty,
                'price' => $price->price,
                'weight' => $price->unit_value,
                'options' => [
                    'unit_type' => $price->unit_type,
                    'product_id'  => $price->product_id
                ]
            ]);
        }
    }
}
