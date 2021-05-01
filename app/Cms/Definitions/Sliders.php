<?php

namespace App\Cms\Definitions;

use App\Models\Slide;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{
    Id,
    Checkbox,
    Image,
    Text,
};
use Vis\Builder\Definitions\Resource;

class Sliders extends Resource
{
    public $model = Slide::class;
    public $title = 'Слайдер';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;
    protected $cacheTag = Slide::CACHE_TAG;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language(),
            Text::make('Url', 'url')->language(),
            Image::make('Картинка', 'picture'),
            Checkbox::make('Активность', 'is_active')->filter(),
        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
