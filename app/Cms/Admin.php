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
                'icon'  => 'picture-o',
                'link'  => '/sliders',
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
