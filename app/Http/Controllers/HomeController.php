<?php

namespace App\Http\Controllers;

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

        return view('home.index', compact('page', 'slides'));
    }
}
