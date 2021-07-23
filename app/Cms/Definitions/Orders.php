<?php

namespace App\Cms\Definitions;

use App\Models\Order;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Definition, Hidden, Id, Text};
use Vis\Builder\Definitions\Resource;

class Orders extends Resource
{
    public $model = Order::class;
    public $title = 'Заказы';
    protected $orderBy = 'id desc';
    protected $isSortable = false;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Имя', 'first_name'),
            Text::make('Фамилия', 'last_name'),
            Text::make('Телефон', 'phone'),

            Definition::make('Продукты')
                ->hasMany('order_products', OrderProducts::class),

        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
