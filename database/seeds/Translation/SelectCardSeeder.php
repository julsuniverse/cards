<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class SelectCardSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order-form',
            'key' => 'choose-cards',
            'text' => [
                'en' => 'Choose TAROT or Lenormand',
                'ru' => 'Выберите ТАРО или Ленорман'
            ],
        ]);

        LanguageLine::create([
            'group' => 'order-form',
            'key' => 'tarot',
            'text' => [
                'en' => 'TAROT',
                'ru' => 'ТАРО'
            ],
        ]);

        LanguageLine::create([
            'group' => 'order-form',
            'key' => 'lenormand',
            'text' => [
                'en' => 'Lenormand',
                'ru' => 'Ленорман'
            ],
        ]);
    }
}
