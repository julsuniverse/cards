<?php

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin_sveta',
            'dob' => '24.01.1970',
            'email' => 'admin@silver-thread.com',
            'password' => Hash::make('secret'),
            'role' => 'admin'
        ]);
    }
}