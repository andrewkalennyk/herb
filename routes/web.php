<?php

use App\Models\Order;

Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('category', '[a-z0-9-]+');
Route::pattern('subcategory', '[a-z0-9-]+');
Route::pattern('productSlug', '[a-z0-9-]+');

Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function () {
        Route::get('/produkciya/{category}/{subcategory?}', 'ProductController@showProduction')->name('category');
        Route::get('/produkciya/{category}/{subcategory}/{productSlug}', 'ProductController@showProduct')->name('product');

        Route::get('/checkout', 'OrderController@showCheckout')->name('checkout');

        Route::any('/search', 'SearchController@doSearch')->name('search');

        Route::group(
            ['prefix' => 'cart'],
            function () {
                Route::post('/add-to-cart', 'CartController@addToCart');
                Route::post('/change-cart-qty', 'CartController@changeCartQty');
                Route::post('/delete-item', 'CartController@deleteItem');
            }
        );

        Route::post('/order', 'OrderController@doOrder')->name('order');
        Route::post('/repeat-order', 'OrderController@doRepeatOrder')->name('repeat-order')->middleware('profile');
        Route::post('/generate-promo-code', 'ProfileController@doGeneratePromoCode')->name('generate_promo_code')->middleware('profile');
        Route::post('/use-promo-code', 'OrderController@doUseCode')->name('use-promo');

        Route::get('/liqPay-redirect', 'OrderController@liqPayRedirect')->name('liqpay_redirect_url');
        Route::get('/success-pay', 'OrderController@successPay')->name('result_liqpay_url');
        Route::post('/server-liqpay-pay', 'OrderController@serverLiqpay')->name('server_liqpay_url');


        Route::group(
            ['prefix' => 'profile'],
            function () {
                Route::get('/', 'ProfileController@showProfile')->name('profile')->middleware('profile');
                Route::get('/orders', 'ProfileController@showOrdersProfile')->name('profile-orders')->middleware('profile');
                Route::get('/loyalty', 'ProfileController@showLoyaltyProfile')->name('profile-loyalty')->middleware('profile');
                Route::post('/save', 'ProfileController@saveProfile')->name('profile-save')->middleware('profile');
                Route::post('/login', 'Auth\LoginController@authenticate')->name('profile-login');
                Route::post('/register', 'Auth\RegisterController@register')->name('profile-register');
                Route::post('/reset', 'Auth\RegisterController@reset')->name('profile-reset');
                Route::get('/activating' , 'Auth\RegisterController@activate')->name('profile-activate');
            });

        Route::get('auth/facebook', 'Auth\FacebookController@facebookRedirect');
        Route::get('auth/facebook/callback', 'Auth\FacebookController@loginWithFacebook');

    }
);

