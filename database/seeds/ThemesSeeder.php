<?php

use Illuminate\Database\Seeder;

class ThemesSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            'name_ru' => 'Личная жизнь и Любовные отношения',
            'name' => 'Personal Relations & Love Matters',
        ]);
        DB::table('themes')->insert([
            'name_ru' => 'Работа и Карьера',
            'name' => 'Work and Career',
        ]);
        DB::table('themes')->insert([
            'name_ru' => 'Поездки и Путешествия',
            'name' => 'Trips & Travels',
        ]);
        DB::table('themes')->insert([
            'name_ru' => 'Расклады общего содержания',
            'name' => 'Others',
        ]);
    }
}