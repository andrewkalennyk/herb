<?php

namespace App\Cms\Definitions;

use App\Models\Product;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Definition, Foreign, Froala, Id, Checkbox, Image, MultiImage, Relations\Options, Text};
use Vis\Builder\Definitions\Resource;

class Products extends Resource
{
    public $model = Product::class;
    public $title = 'Продукция';
    protected $orderBy = 'id asc';
    protected $isSortable = false;
    protected $cacheTag = Product::CACHE_TAG;

    public function fields()
    {
        return [
            'Общее' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Название', 'title')->language(),
                Text::make('Артикул', 'article'),
                Foreign::make('Категория', 'category_id')
                    ->options((new Options('category'))->keyField('title'))
                    ->nullable('...')
                    ->default(null),
                Froala::make('Краткое описание', 'short_description')->language()->onlyForm(),
                Froala::make('Описание', 'description')->language()->onlyForm(),
                Checkbox::make('Активность', 'is_active')->filter(),
                Froala::make('Состав', 'composition')->language()->onlyForm(),
                Text::make('Url', 'slug')->onlyForm(),
                Checkbox::make('Новые', 'is_new')->onlyForm(),
                Checkbox::make('Хит', 'is_hit')->onlyForm(),
            ],
            'Медиа' => [
                Image::make('Картинка', 'picture'),
                MultiImage::make('Картинки доп', 'additional_pictures')->onlyForm(),
                Text::make('Ссылка на видео', 'video_url')->onlyForm(),
                Image::make('Превью видео', 'vide_cover_image')->onlyForm(),
            ],
            'Цена' => [
                Definition::make('Цена')
                    ->hasMany('product_prices', ProductPrices::class),
                Checkbox::make('Продано', 'is_sold_out')->onlyForm(),
                Checkbox::make('50% скидка', 'is_discount_fifty')->onlyForm(),
            ]

        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
