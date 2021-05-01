<?php

namespace App\Cms\Tree\Templates;


class Contacts extends Node
{
    protected $titleDefinition = 'Контакты';
    public $action = 'PageController@showContact';
}
