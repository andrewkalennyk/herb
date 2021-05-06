<?php

namespace App\Cms\Definitions;

use App\Models\InfoBlock;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{
    Hidden,
    Select,
    Id,
    Checkbox,
    Image,
    Text};
use Vis\Builder\Definitions\Resource;

class InfoBlocks extends Resource
{
    public $model = InfoBlock::class;
    public $title = 'Блоки';
    protected $orderBy = 'id asc';
    protected $isSortable = false;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title'),
            Image::make('Картинка', 'picture'),
            Checkbox::make('Checkbox', 'is_active')->filter(),
            Select::make('Тип блока', 'template')
                ->options([
                    'picture' => 'Картинка',
                    'picture_left' => 'Картинка слева',
                    'picture_right' => 'Картинка справа'

                ]),
            Hidden::make('tb_tree_id', 'tb_tree_id')
                ->onlyForm()
                ->default(request('foreign_field_id')),
        ];
    }


    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->delete()->clone();
    }

}
