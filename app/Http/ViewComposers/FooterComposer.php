<?php

namespace App\Http\ViewComposers;

use App\Models\Tree;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view)
    {
        $menu = Cache::tags(['tree'])->rememberForever('menuFooter', function () {
            return Tree::isMenuFooter()->get();
        });

        $view->with(compact('menu'));
    }
}
