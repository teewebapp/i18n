<?php

namespace Tee\I18n;
use Route, Request, Config, App, Redirect;

$locale = Request::segment(1);

if (in_array($locale, Config::get('app.locales'))) {
    App::setLocale($locale);
} else {
    $locale = null;
}

Config::set('i18n.locale_preffix', $locale);

Route::get('change-location/{newLocale}', ['as' => 'change-locale',
    'uses' => function($newLocale) {
    $locales = Config::get('app.locales');
    $url = route('home', array(), false);
    $aux = explode('/', $url);
    if(in_array($aux, $locales))
        array_shift($aux);
    if($newLocale != Config::get('app.locale'))
        array_unshift($aux, $newLocale);
    return Redirect::to(implode('/', $aux));
}]);