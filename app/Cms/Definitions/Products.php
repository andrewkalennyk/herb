<?php

namespace App\Cms\Definitions;

use App\Models\Product;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Foreign, Id, Checkbox, Relations\Options, Text};
use Vis\Builder\Definitions\Resource;

class Products extends Resource
{
    public $model = Product::class;
    public $title = 'Продукция';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;
    protected $cacheTag = Product::CACHE_TAG;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language(),
            Checkbox::make('Активность', 'is_active')->filter(),
            /*Foreign::make('Категория', 'parent_id')
                ->options((new Options('parent'))->keyField('title'))
                ->nullable('...')
                ->default(null)*/

        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
