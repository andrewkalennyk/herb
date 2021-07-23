<?php

namespace App\Cms\Definitions;

use App\Models\InfoBlock;
use App\Models\ProductPrice;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{
    Hidden,
    Select,
    Id,
    Checkbox,
    Image,
    Text};
use Vis\Builder\Definitions\Resource;

class ProductPrices extends Resource
{
    public $model = ProductPrice::class;
    public $title = 'Цены';
    protected $orderBy = 'id asc';
    protected $isSortable = false;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Select::make('Тип измерений', 'unit_type')
                ->options([
                    'gr' => 'гр',
                    'ml' => 'мл',
                ]),
            Text::make('Величина измерений', 'unit_value'),
            Text::make('Старая цена', 'old_price'),
            Text::make('Цена', 'price'),
            Checkbox::make('Активность', 'is_active')->filter(),
            Checkbox::make('Дефолтная цена', 'is_default')->filter(),
            Hidden::make('product_id', 'product_id')
                ->onlyForm()
                ->default(request('foreign_field_id')),
        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
