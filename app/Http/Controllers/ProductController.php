<?php


namespace App\Http\Controllers;


use Vis\Builder\TreeController;

class ProductController extends TreeController
{
    public function showProduction()
    {
        $page = $this->node;

        return view('products.index', compact('page'));
    }
}
