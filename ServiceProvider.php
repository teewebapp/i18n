<?php

namespace Tee\I18n;

use Widgets\LanguageMenu;
use Widget;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        require_once app_path().'/macros/form.php';
        // registra os widgets
        Widget::register(
            'languageMenu',
            __NAMESPACE__.'\\Widgets\\LanguageMenu'
        );
    }
}