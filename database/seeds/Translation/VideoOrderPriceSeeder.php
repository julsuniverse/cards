<?php

declare(strict_types=1);

use Spatie\TranslationLoader\LanguageLine;

class VideoOrderPriceSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order-form-video',
            'key' => 'choose-cards',
            'text' => [
                'en' => 'Choose TAROT or Lenormand',
                'ru' => 'Выберите ТАРО или Ленорман'
            ],
        ]);

        LanguageLine::create([
            'group' => 'price-video',
            'key' => 'value',
            'text' => [
                'en' => '50',
                'ru' => '700'
            ],
        ]);
    }
}
