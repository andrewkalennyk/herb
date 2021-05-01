<?php


namespace App\Cms\Tree\Templates;


class AboutUs extends Delivery
{
    protected $titleDefinition = 'О нас';
    public $action = 'PageController@showAboutUs';
}
