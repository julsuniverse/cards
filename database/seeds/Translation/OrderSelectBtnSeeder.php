<?php


use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class OrderSelectBtnSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order-select',
            'key' => 'click-btn',
            'text' => [
                'en' => 'Click the layout name to see it\'s content',
                'ru' => 'Нажмите на название расклада, чтобы посмотреть его содержание'
            ],
        ]);
    }
}
