<?php

namespace App\Cms;

use Vis\Builder\Setting\AdminBase;

class Admin extends AdminBase
{
    protected $logoUrl = '';
    public function menu()
    {
        return [

            [
                'title' => 'Структура сайта',
                'icon'  => 'sitemap',
                'link'  => '/tree',
            ],

            [
                'title' => 'Слайдер',
                'icon'  => 'sliders-h',
                'link'  => '/sliders',
            ],

            [
                'title' => 'Товары',
                'icon'  => 'shopping-bag',
                'link'  => '/products',
                'submenu' => [
                    [
                        'title' => 'Категория',
                        'link'  => '/product_categories',
                    ],
                    [
                        'title' => 'Товары',
                        'link'  => '/products',
                    ]
                ],
            ],

            [
                'title' => 'Настройки',
                'icon'  => 'cog',
                'link'  => '/settings_block',
                'submenu' => [
                    [
                        'title' => 'Управление',
                        'link'  => '/settings/settings_all',
                    ],
                    [
                        'title' => 'Переводы CMS',
                        'link'  => '/translations_cms/phrases',
                    ],
                    [
                        'title' => 'Контроль изменений',
                        'link'  => '/revisions',
                    ],
                ],
            ],

            [
                'title' => 'Переводы',
                'icon'  => 'language',
                'link'  => '/translations/phrases',
            ],

            [
                'title' => 'Упр. пользователями',
                'icon'  => 'user',
                'link'  => '/users_group',
                'submenu' => [
                    [
                        'title' => 'Пользователи',
                        'link'  => '/users',
                    ],

                    [
                        'title' => 'Группы',
                        'link'  => '/groups',
                    ],

                ],
            ],
        ];
    }

}
