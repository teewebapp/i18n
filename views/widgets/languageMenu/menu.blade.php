<div class="language-menu">
    @foreach($locales as $locale)    
        <a href="{{{ route('change-locale', $locale) }}}">
            <img src="{{{ moduleAsset('i18n', 'images/flag-'.$locale.'.png') }}}" style="height:20px;" alt="{{{ Config::get('i18n::main.locale_name.'.$locale) }}}" title="{{{ Config::get('i18n::main.locale_name.'.$locale) }}}" />
        </a>
        &nbsp;
    @endforeach
</div>