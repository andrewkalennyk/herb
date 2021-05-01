<?php


namespace App\Cms\Tree\Templates;


use App\Cms\Definitions\InfoBlocks;
use Vis\Builder\Fields\Checkbox;
use Vis\Builder\Fields\Definition;
use Vis\Builder\Fields\Froala;
use Vis\Builder\Fields\Id;
use Vis\Builder\Fields\Image;
use Vis\Builder\Fields\MultiImage;
use Vis\Builder\Fields\Text;
use Vis\Builder\Fields\Textarea;

class Delivery extends Node
{
    protected $titleDefinition = 'Доставка';
    public $action = 'PageController@showDelivery';

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
            'Блоки' => [
                Definition::make('Инфо-блоки')
                    ->hasMany('info_blocks', InfoBlocks::class)
            ],
            'SEO' => [
                Text::make('Seo title', 'seo_title'),
                Textarea::make('Seo description', 'seo_description')
            ]

        ];
    }

}
