<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class MenuSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'home',
            'text' => ['en' => 'Home', 'ru' => 'Главная страница'],
        ]);

        LanguageLine::create([
            'group' => 'menu',
            'key' => 'tarot',
            'text' => ['en' => 'Tarot', 'ru' => 'Таро'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'lenorman',
            'text' => ['en' => 'Lenormand', 'ru' => 'Ленорман'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'future',
            'text' => ['en' => 'Future Prediction', 'ru' => 'Прогноз будущего'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'order',
            'text' => ['en' => 'Order Card Reading', 'ru' => 'Заказать консультацию'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'name',
            'text' => ['en' => 'Silver Thread', 'ru' => 'Серебрянная нить'],
        ]);
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'tarot',
            'text' => ['en' => 'Tarot', 'ru' => ''],
        ]);
    }
}