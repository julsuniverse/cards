<?php

declare(strict_types=1);


use Spatie\TranslationLoader\LanguageLine;

class OrderSuccessInfo extends \Illuminate\Database\Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'order-success-info',
            'key' => 'confidential',
            'text' => [
                'en' => 'The information of your personal page is confidential. It can be accessed only by the person who has the password.',
                'ru' => 'Информация Вашего личного кабинета конфеденциально доступна на сайте только для Вас.'
            ],
            'is_html' => true
        ]);
    }
}
