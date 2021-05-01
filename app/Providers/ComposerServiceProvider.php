<?php

namespace App\Providers;

use App\Http\ViewComposers\FooterComposer;
use App\Http\ViewComposers\HeaderComposer;
use App\Http\ViewComposers\InfoBlockComposer;
use App\Http\ViewComposers\LangsComposer;
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
        View::composer('partials.menu_header', HeaderComposer::class);
        View::composer('partials.menu_footer', FooterComposer::class);
        View::composer('partials.langs', LangsComposer::class);
        View::composer('partials.breadcrumbs', 'App\Http\ViewComposers\BreadcrumbsComposer');
        View::composer('partials.info_blocks.info_blocks', InfoBlockComposer::class);
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
