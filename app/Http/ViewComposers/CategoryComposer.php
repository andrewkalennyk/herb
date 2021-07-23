<?php

namespace App\Http\ViewComposers;

use App\Models\InfoBlock;
use App\Models\ProductCategory;
use App\Models\Tree;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CategoryComposer
{

    public function compose(View $view)
    {
        if (! isset($view->getData()['page'])) {
            return 'Не передан параметр';
        }

        $page = $view->getData()['page'];

        $categories = Cache::tags([ProductCategory::CACHE_TAG])->rememberForever('product_categories_items', function () use($page) {
            return ProductCategory::with('subCategories')->doesntHave('parent')->active()->get();
        });

        $view->with('categories', $categories);
    }
}
