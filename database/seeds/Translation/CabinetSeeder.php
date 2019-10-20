<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class CabinetSeeder extends Seeder
{
 public function run()
 {
     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'title',
         'text' => [
             'en' => 'Welcome,',
             'ru' => 'Добро пожаловать,'
         ],
     ]);

     // orders tab
     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'tab-order-name',
         'text' => [
             'en' => 'Orders',
             'ru' => 'Заказы'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'order-status-new',
         'text' => [
             'en' => 'You will receive email notification when your order will be complete.',
             'ru' => 'Когда заказ будет готов, на ваш email придет уведомление.'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'order-layout',
         'text' => [
             'en' => 'Selected layout:',
             'ru' => 'Выбранный расклад:'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'order-description',
         'text' => [
             'en' => 'Description:',
             'ru' => 'Описание:'
         ],
     ]);

     // profile info tab
     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'tab-info-name',
         'text' => [
             'en' => 'Profile information',
             'ru' => 'Личная ифнормация'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-name',
         'text' => [
             'en' => 'Name',
             'ru' => 'Ваше имя'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-name-placeholder',
         'text' => [
             'en' => 'Name',
             'ru' => 'Имя'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-name-help',
         'text' => [
             'en' => 'Your name should be real',
             'ru' => 'Ваше имя должно быть настоящим, иначе смысл того что покажут карты не будет соответствовать Вашей личности.'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-email-placeholder',
         'text' => [
             'en' => 'Enter your email.',
             'ru' => 'Введите email.'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-email-help',
         'text' => [
             'en' => 'Your email address will not be disclosed.',
             'ru' => 'Ваш email не будет разглашаться.'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-date',
         'text' => [
             'en' => 'Date of Birth',
             'ru' => 'Дата рождения'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-date-placeholder',
         'text' => [
             'en' => 'Date of Birth',
             'ru' => 'Дата рождения'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'info-date-help',
         'text' => [
             'en' => 'Your date of birth should be real',
             'ru' => 'Ваша дата рождения должны быть настоящими, иначе смысл того что покажут карты не будет соответствовать Вашей личности.'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'submit',
         'text' => [
             'en' => 'Submit',
             'ru' => 'Сохранить'
         ],
     ]);

     //
     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'tab-password-name',
         'text' => [
             'en' => 'Change Password',
             'ru' => 'Смена пароля'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'password-new',
         'text' => [
             'en' => 'New Password',
             'ru' => 'Новый Пароль'
         ],
     ]);

     LanguageLine::create([
         'group' => 'cabinet',
         'key' => 'password-repeat',
         'text' => [
             'en' => 'New Password',
             'ru' => 'Повторите пароль'
         ],
     ]);
 }
}