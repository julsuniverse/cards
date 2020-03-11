<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class PriceSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'price',
            'key' => 'value',
            'text' => [
                'en' => '50',
                'ru' => '700'
            ],
        ]);
    }
}
