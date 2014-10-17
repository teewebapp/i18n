<?php

/**
 * Make a label with model attribute name
 */
Form::macro('selectLanguage', function($attributeName, $htmlAttributes) {
    $choices = [];
    $choices[''] = '';

    foreach(Config::get('app.locales') as $locale) {
        $choices[$locale] = Config::get('i18n::main.locale_name.'.$locale);
    }

    return Form::select($attributeName, $choices, null, $htmlAttributes);
});
