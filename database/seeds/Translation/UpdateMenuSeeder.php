<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class UpdateMenuSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'oracle-tarot',
            'text' => ['en' => 'Interactive ORACLE', 'ru' => 'Интерактивный ОРАКУЛ'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'oracle-runes',
            'text' => ['en' => 'Runes <br /> Oracle', 'ru' => 'Руны <br /> Оракул'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'terms',
            'text' => ['en' => 'Terms of card-reading', 'ru' => 'Условия консультации'],
        ]);
    }
}