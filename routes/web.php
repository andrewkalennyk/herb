<?php

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

        Route::group(
            ['prefix' => 'cart'],
            function () {
                Route::post('/add-to-cart', 'CartController@addToCart');
                Route::post('/change-cart-qty', 'CartController@changeCartQty');
                Route::post('/delete-item', 'CartController@deleteItem');
            }
        );

        Route::post('/order', 'OrderController@doOrder')->name('order');

        Route::post('/login-profile', 'LoginController@authenticate')->name('profile-auth');

        Route::get('profile', 'ProfileController@showProfile')->name('profile');
    }
);
