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
        $locale = $request->route()->getPrefix();
        if (!$locale || $locale == self::LOCALE_EN) {
            App::setLocale(self::LOCALE_EN);
        }
        if ($locale == self::LOCALE_RU) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}