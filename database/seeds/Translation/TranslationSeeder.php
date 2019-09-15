<?php

use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(OrderSeeder::class);
    }
}