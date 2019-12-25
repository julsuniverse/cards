<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class AddConsultationToMenuSeeder extends Seeder
{
    public function run()
    {
        LanguageLine::create([
            'group' => 'menu',
            'key' => 'consultation',
            'text' => ['en' => 'Card-Reading', 'ru' => 'Консультация на картах'],
        ]);
    }
}