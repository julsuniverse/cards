<?php

declare(strict_types=1);

use Spatie\TranslationLoader\LanguageLine;

class TextBlockOnOrderPageSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order',
            'key' => 'text-before-btns',
            'text' => ['en' => '', 'ru' => ''],
            'is_html' => true
        ]);
    }
}
