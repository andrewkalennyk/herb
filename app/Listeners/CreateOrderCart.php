<?php

namespace App\Listeners;

use App\Events\CreateOrderCartEvent;
use App\Models\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;

class CreateOrderCart
{

    private $content;

    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {
        $this->content = Cart::content();
    }

    /**
     * Handle the event.
     *
     * @param  CreateOrderCartEvent  $event
     * @return void
     */
    public function handle(CreateOrderCartEvent $event)
    {

        $orderProducts = $this->content->map(function ($cartItem) use($event) {
            return [
                'order_id' => $event->order->id,
                'product_id' => $cartItem->options->product_id,
                'price' => $cartItem->price,
                'weight' => $cartItem->weight,
                'unit_type'=> $cartItem->options->unit_type,
                'qty' => $cartItem->qty
            ];
        });

        foreach ($orderProducts as $product) {
            OrderProduct::create($product);
        }
    }
}
