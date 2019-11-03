<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class TermsSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'terms',
            'key' => 'text',
            'text' => [
                'en' => 'terms',
                'ru' => 'terms'
            ],
            'is_html' => true,
        ]);
    }
}