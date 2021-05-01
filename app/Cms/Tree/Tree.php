<?php

namespace App\Cms\Tree;

use App\Cms\Tree\Templates\AboutUs;
use App\Cms\Tree\Templates\Contacts;
use App\Cms\Tree\Templates\Delivery;
use App\Cms\Tree\Templates\Node;
use App\Cms\Tree\Templates\Production;
use Vis\Builder\Definitions\BaseTree;

class Tree extends BaseTree
{
    public function templates()
    {
        return [
            'main' => Node::class,
            'contacts' => Contacts::class,
            'about_us' => AboutUs::class,
            'delivery' => Delivery::class,
            'production' => Production::class
        ];
    }
}
