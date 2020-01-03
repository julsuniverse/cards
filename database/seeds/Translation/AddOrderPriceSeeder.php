<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class AddOrderPriceSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order',
            'key' => 'price',
            'text' => [
                'en' => 'Стоимость заказа 600 грн.',
                'ru' => 'Стоимость заказа 600 грн.'
            ],
            'is_html' => true,
            'name' => 'Стоимость заказа'
        ]);

        LanguageLine::create([
            'group' => 'order',
            'key' => 'adult',
            'text' => [
                'en' => 'Консультации предлагаются и выполняются только для совершеннолетних.',
                'ru' => 'Консультации предлагаются и выполняются только для совершеннолетних.'
            ],
            'is_html' => true,
            'name' => 'Для совершеннолетних'
        ]);
    }
}