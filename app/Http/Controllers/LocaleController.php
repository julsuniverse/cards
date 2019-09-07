<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    const LOCALE_EN = 'en';
    const LOCALE_RU = 'ru';

    public function index()
    {
        $locale = App::getLocale();
        if ($locale == self::LOCALE_EN) {
            App::setLocale(self::LOCALE_RU);
            return redirect()->to("http://ru." . request()->getHost());
        }
        elseif ($locale == self::LOCALE_RU) {
            App::setLocale(self::LOCALE_EN);

            $host = parse_url(request()->url(), PHP_URL_HOST);
            $pos = strpos($host, '.');
            $url = substr($host, $pos + 1);
            return redirect()->to("http://" . $url);
        }

        return redirect()->back();
    }
}