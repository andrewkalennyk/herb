<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Observers\SlugObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(SlugObserver::class);
        ProductCategory::observe(SlugObserver::class);
    }
}
