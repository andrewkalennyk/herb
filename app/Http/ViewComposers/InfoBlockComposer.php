<?php

namespace App\Http\ViewComposers;

use App\Models\InfoBlock;
use App\Models\Tree;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class InfoBlockComposer
{

    public function compose(View $view)
    {
        if (! isset($view->getData()['page'])) {
            return 'Не передан параметр';
        }

        $page = $view->getData()['page'];

        $blocks = Cache::tags(['tb_tree'])->rememberForever('info_blocks_' . $page->id, function () use($page) {
            return InfoBlock::where('tb_tree_id', $page->id)->get();
        });

        $view->with('blocks', $blocks);
    }
}
