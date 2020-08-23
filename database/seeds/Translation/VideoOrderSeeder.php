<?php

declare(strict_types=1);

use Spatie\TranslationLoader\LanguageLine;

class VideoOrderSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        // Order index
        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'title',
            'text' => [
                'en' => 'Пожалуйста, обратите внимание:',
                'ru' => 'Пожалуйста, обратите внимание:'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'part1',
            'text' => [
                'en' => '',
                'ru' => ''
            ],
            'is_html' => true
        ]);

        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'btn-order-simple',
            'text' => [
                'en' => 'Заказать консультацию на картах',
                'ru' => 'Заказать консультацию на картах'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'btn-order-select',
            'text' => [
                'en' => 'Выбрать расклад на картах и Заказать консультацию',
                'ru' => 'Выбрать расклад на картах и Заказать консультацию'
            ],
        ]);

        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'btn-order-instructions',
            'text' => [
                'en' => 'Нажмите, чтобы посмотреть подробную инструкцию',
                'ru' => 'Нажмите, чтобы посмотреть подробную инструкцию'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'order-instructions',
            'text' => [
                'en' => '',
                'ru' => ''
            ],
            'is_html' => true
        ]);

        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'text-before-btns',
            'text' => ['en' => '', 'ru' => ''],
            'is_html' => true
        ]);

        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'adult',
            'text' => [
                'en' => 'Консультации предлагаются и выполняются только для совершеннолетних.',
                'ru' => 'Консультации предлагаются и выполняются только для совершеннолетних.'
            ],
            'is_html' => true,
            'name' => 'Для совершеннолетних'
        ]);

        //Order form
        LanguageLine::create([
            'group' => 'order.video',
            'key' => 'price',
            'text' => [
                'en' => 'Стоимость заказа 700 грн.',
                'ru' => 'Стоимость заказа 700 грн.'
            ],
            'is_html' => true,
            'name' => 'Стоимость заказа'
        ]);

        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'title',
            'text' => [
                'en' => 'Заказ консультации',
                'ru' => 'Заказ консультации'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'name',
            'text' => [
                'en' => 'Введите Ваше имя',
                'ru' => 'Введите Ваше имя'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'name-help',
            'text' => [
                'en' => 'Ваше имя должно быть настоящим, иначе смысл того что покажут карты не будет соответствовать Вашей личности. ',
                'ru' => 'Ваше имя должно быть настоящим, иначе смысл того что покажут карты не будет соответствовать Вашей личности. '
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'email',
            'text' => [
                'en' => 'Email',
                'ru' => 'Email'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'email-help',
            'text' => [
                'en' => 'Ваш email не будет разглашаться.',
                'ru' => 'Ваш email не будет разглашаться.'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'date',
            'text' => [
                'en' => 'Введите дату рождения',
                'ru' => 'Введите дату рождения'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'date-help',
            'text' => [
                'en' => 'Ваша дата рождения должна быть настоящей, иначе смысл того что покажут карты не будет соответствовать Вашей личности.',
                'ru' => 'Ваша дата рождения должна быть настоящей, иначе смысл того что покажут карты не будет соответствовать Вашей личности.'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'text',
            'text' => [
                'en' => 'Опишите (понятно) ситуацию, о которой хотите получить консультацию.',
                'ru' => 'Опишите (понятно) ситуацию, о которой хотите получить консультацию.'
            ],
        ]);
        LanguageLine::create([
            'group' => 'order-form.video',
            'key' => 'example',
            'text' => [
                'en' => '',
                'ru' => ''
            ],
            'is_html' => true
        ]);
    }
}
