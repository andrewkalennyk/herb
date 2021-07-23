<?php

namespace App\Providers;

use App\Http\ViewComposers\CartComposer;
use App\Http\ViewComposers\CategoryComposer;
use App\Http\ViewComposers\FooterComposer;
use App\Http\ViewComposers\HeaderComposer;
use App\Http\ViewComposers\InfoBlockComposer;
use App\Http\ViewComposers\LangsComposer;
use App\Http\ViewComposers\ProductComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.header', HeaderComposer::class);
        View::composer('partials.menu_footer', FooterComposer::class);
        View::composer('partials.langs', LangsComposer::class);
        View::composer('partials.breadcrumbs', 'App\Http\ViewComposers\BreadcrumbsComposer');
        View::composer('partials.info_blocks.info_blocks', InfoBlockComposer::class);
        View::composer([
            'products.partials.catalog_sidebar',
            'products.partials.catalog_mobile',
            ], CategoryComposer::class);

        View::composer('popups.cart', CartComposer::class);
        View::composer('products.partials.product', ProductComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
