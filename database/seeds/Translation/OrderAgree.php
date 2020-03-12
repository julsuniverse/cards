<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class OrderAgree extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order',
            'key' => 'agree',
            'text' => [
                'en' => 'The price $50 is agreed',
                'ru' => 'С ценой заказа 700 грн согласен(а)'
            ],
            'is_html' => 1
        ]);
    }
}
