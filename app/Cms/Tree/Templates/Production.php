<?php


namespace App\Cms\Tree\Templates;


class Production extends Node
{
    protected $titleDefinition = 'Продукция';
    public $action = 'ProductController@showProduction';
}
