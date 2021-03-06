<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderCartEvent;
use App\Events\RepeatOrderEvent;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\UsePromoRequest;
use App\Models\NpArea;
use App\Models\NpCity;
use App\Models\NpStreet;
use App\Models\NpWareHouse;
use App\Models\Order;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use DenizTezcan\LiqPay\LiqPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
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

        $regions = NpArea::active()->get();
        $cities = NpCity::active()->get();
        $wareHouses = NpWareHouse::active()->get();
        $streets = NpStreet::active()->get();

        return view('order.checkout', compact(
            'cart',
            'total',
            'user',
            'discount',
            'discountTotal',
            'regions',
            'cities',
            'wareHouses',
            'streets'
        ));
    }

    public function doOrder(OrderRequest $request): array
    {
        $order = Order::create($request->all());

        if ($order->paid_type == 'online') {
            $description = __t('Оплата заказа №'. $order->id.' с сайта herbarius');
            $pay = (new LiqPay())->pay(
                1,
                'UAH',
                $description,
                $order->id,
                url('/'),
                ''
            );

            Session::put('liqpay_form', $pay);
        }

        return [
            'status' => (bool)event(new CreateOrderCartEvent($order)),
            'pay_form' => !empty($pay) ? route('liqpay_redirect_url') : '',
            'order_id'=> str_pad($order->id, 10, '0', STR_PAD_LEFT)
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

    public function liqPayRedirect()
    {
        $form = Session::get('liqpay_form');

        return view('order.liq-pay', compact('form'));
    }

    public function successPay()
    {
        dd(\request()->all());
    }

    public function serverLiqpay()
    {
        \Log::info(\request()->all());
    }
}
