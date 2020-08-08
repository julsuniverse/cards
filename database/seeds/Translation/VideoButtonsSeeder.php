<?php

declare(strict_types=1);

use Spatie\TranslationLoader\LanguageLine;

class VideoButtonsSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'youtube',
            'text' => ['en' => 'Youtube', 'ru' => 'Youtube'],
            'is_html' => true
        ]);

        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'top-block-3',
            'text' => ['en' => '', 'ru' => ''],
            'is_html' => true
        ]);
    }
}
