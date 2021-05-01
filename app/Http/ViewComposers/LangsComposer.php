<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class LangsComposer
{
    private $locales = [
        'ua' => 'Ua',
        'ru' => 'Ru',
        'en' => 'En',
    ];

    public function compose(View $view)
    {
        $langs = $this->locales;
        $thisLang = $this->locales[App::getLocale()];

        $view->with(compact('langs', 'thisLang'));
    }
}
