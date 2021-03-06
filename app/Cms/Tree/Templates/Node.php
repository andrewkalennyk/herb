<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{ Checkbox, Froala, Id, Image, MultiImage, Text, Textarea };

use Vis\Builder\Definitions\ResourceTree;

class Node extends ResourceTree
{
    protected $titleDefinition = 'Главный';
    public $action = 'HomeController@showPage';

    public function fields()
    {
        return [
            'Общее' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Заголовок', 'title')->language(),
                Froala::make('Описание', 'description')->language(),
                Text::make('Url', 'slug'),
                Image::make('Картинка', 'picture'),
                MultiImage::make('Дополнительные картинки', 'additional_pictures'),
                Checkbox::make('Активно' ,'is_active'),
            ],
            'Меню' => [
                Checkbox::make('Меню верхнее' ,'is_show_in_menu'),
                Checkbox::make('Меню футера' ,'is_show_in_footer_menu'),
            ],
            'SEO' => [
                Text::make('Seo title', 'seo_title'),
                Textarea::make('Seo description', 'seo_description')
            ]

        ];
    }
}
