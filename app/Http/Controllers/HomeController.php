<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use Illuminate\Support\Facades\Cache;
use Vis\Builder\TreeController;

class HomeController extends TreeController
{
    /*
     * show index page site
     */
    public function showPage()
    {
        $page = $this->node;

        $slides = Cache::tags([Slide::CACHE_TAG])->rememberForever('slides_main', function () {
            return Slide::active()->orderBy('priority', 'asc')->take(6)->get();
        });

        $hitProducts = Cache::tags([Product::CACHE_TAG])->rememberForever('product_hit_main', function () {
            return Product::with('category.parent')
                ->productDefaultPrices()
                ->active()
                ->hit()
                ->orderBy('products.id', 'asc')
                ->take(6)
                ->get();
        });


        $newProducts = Cache::tags([Product::CACHE_TAG])->rememberForever('product_new_main', function () {
            return Product::with('category.parent')
                ->productDefaultPrices()
                ->active()
                ->new()
                ->orderBy('products.id', 'asc')
                ->take(6)
                ->get();
        });


        return view('home.index', compact('page', 'slides','hitProducts', 'newProducts'));
    }
}
