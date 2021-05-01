<?php
return [

    'title' => "Изображения",

    'per_page' => 40,

    'size_validation' => [
        'enabled' => true,
        'max_size' => '1500000',
        'error_message' => "Превышен максимальный размер изображения в [size] MB"
    ],

    'extension_validation' => [
        'enabled' => true,
        'allowed_extensions' => ['png', 'jpg', 'jpeg'],
        'error_message' => "Допустимы только изображения форматов: [extension_list]"
    ],

    /* Quality is only applied if you're encoding JPG format since PNG compression. Value range is 0-100.*/
    'quality' => 85,

    /* Optimization with Vis\Builder\OptimizationImg. May greatly increase execution time when used to large sized photos. */
    'optimization' => true,

    /* use source file name as title when uploading images */
    'source_title' => true,

    /* store EXIF metadata in database */
    'store_exif' => true,

    /* delete files upon deleting entry from database */
    'delete_files' => false,

    /* rename files upon renaming entry title in database */
    'rename_files' => false,

    /* displays or hides generate new size button in cms */
    'display_generate_new_size_button' => true,

    'fields' => [
        'title' => [
            'caption' => 'Название',
            'type' => 'text',
            'field' => 'string',
            'tabs' => config('translations.config.languages')
        ],

        'description' => [
            'caption' => 'Описание',
            'type' => 'wysiwyg',
            'field' => 'text',
            'tabs' => config('translations.config.languages')
        ],
        'is_active' => [
            'caption' => 'Изображение активно',
            'type' => 'checkbox',
            'options' => [
                1 => 'Активные',
                0 => 'He aктивные',
            ],
            'field' => 'tinyInteger',
        ],
    ],

    'sizes' => [
        'source' => [
            'caption' => 'Оригинал',
            'default_tab' => true,
        ],
        'cms_preview' => [
            'caption' => 'Превью в ЦМС',
            'default_tab' => false,
            'modify' => [
                'fit' => [160, 160, function (\Intervention\Image\Constraint $constraint) {
                    $constraint->upsize();
                }],
            ],
        ],

    ],

];
