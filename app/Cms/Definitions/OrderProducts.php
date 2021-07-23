<?php

namespace App\Cms\Definitions;

use App\Models\OrderProduct;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Definition, Hidden, Id, Text};
use Vis\Builder\Definitions\Resource;

class OrderProducts extends Resource
{
    public $model = OrderProduct::class;
    public $title = 'Продукты';
    protected $orderBy = 'id desc';
    protected $isSortable = false;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Цена', 'price'),
            Text::make('Вес', 'weight'),
            Text::make('Тип веса', 'unit_type'),
            Text::make('Количество', 'qty'),

            Hidden::make('order_id', 'order_id')
                ->onlyForm()
                ->default(request('foreign_field_id')),
        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
