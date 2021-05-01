<?php


namespace App\Http\Controllers;


use App\Models\Tree;
use Vis\Builder\TreeController;

class PageController extends TreeController
{
    public function showAboutUs()
    {
        $page = $this->node;

        return view('pages.about_us', compact('page'));
    }

    public function showDelivery()
    {
        $page = $this->node;

        return view('pages.delivery', compact('page'));
    }

    public function showContact()
    {
        $page = $this->node;

        return view('pages.contact', compact('page'));
    }
}
