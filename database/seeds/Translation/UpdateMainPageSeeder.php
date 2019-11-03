<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class UpdateMainPageSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-10-title',
            'text' => [
                'en' => 'Runes',
                'ru' => 'Руны'
            ],
            'is_html' => true,
        ]);
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-10',
            'text' => [
                'en' => 'Runes',
                'ru' => 'Руны'
            ],
            'is_html' => true,
        ]);
        //Runes oracle
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-11-title',
            'text' => [
                'en' => 'Runes Oracle',
                'ru' => 'Рунический оракул'
            ],
            'is_html' => true,
        ]);
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-11-subtitle',
            'text' => [
                'en' => 'Древние руны',
                'ru' => 'Древние руны'
            ],
            'is_html' => true,
        ]);
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-11-small',
            'text' => [
                'en' => 'Runes Oracle',
                'ru' => 'Рунический оракул'
            ],
            'is_html' => true,
        ]);
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-11-text',
            'text' => [
                'en' => 'Ваша ситуация',
                'ru' => 'Ваша ситуация'
            ],
            'is_html' => true,
        ]);
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-11-btn',
            'text' => [
                'en' => 'Runes',
                'ru' => 'Руны'
            ],
            'is_html' => false,
        ]);
    }
}