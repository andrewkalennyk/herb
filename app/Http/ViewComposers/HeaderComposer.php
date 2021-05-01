<?php

namespace App\Http\ViewComposers;

use App\Models\Tree;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HeaderComposer
{

    public function compose(View $view)
    {
        $menu = Cache::tags(['tree'])->rememberForever('menuHeader', function () {
            return Tree::isMenu()->get();
        });

        $view->with('menu', $menu);
    }
}
