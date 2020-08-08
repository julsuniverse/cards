<?php

declare(strict_types=1);

use Spatie\TranslationLoader\LanguageLine;

class NewPageBlockSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'main-page',
            'key' => 'main-block-12',
            'text' => ['en' => '', 'ru' => ''],
            'is_html' => true
        ]);
    }
}
