<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class FooterSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'footer',
            'key' => 'footer-text',
            'text' => ['en' => '', 'ru' => ''],
            'is_html' => true,
        ]);
    }
}