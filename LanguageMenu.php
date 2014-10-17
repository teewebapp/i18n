<?php

namespace Tee\I18n\Widgets;

use View, Config;

class LanguageMenu {

    public function register(array $options=array())
    {
        $locales = Config::get('app.locales');
        return View::make(
            'i18n::widgets.languageMenu.menu',
            compact('locales')
        );
    }

} 