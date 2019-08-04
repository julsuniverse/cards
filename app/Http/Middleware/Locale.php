<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Locale
{
    const LOCALE_EN = 'en';
    const LOCALE_RU = 'ru';

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $url_array = explode('.', parse_url($request->url(), PHP_URL_HOST));
        $subdomain = $url_array[0];

        if ($subdomain == self::LOCALE_RU) {
            App::setLocale($subdomain);
        } else {
            App::setLocale(self::LOCALE_EN);
        }
        return $next($request);
    }
}