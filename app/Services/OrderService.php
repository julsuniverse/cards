<?php

namespace App\Services;

use App\Mail\RegistrationEmail;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OrderService
{
    public function create(array $data)
    {
        $password = str_random(8);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'dob' => $data['date'],
            'password' => Hash::make($password)
        ]);
        Order::create([
            'user_id' => $user->id,
            'layout_id' => $data['layout'] ?? null,
            'description' => $data['text'],
            'price' => $data['price']
        ]);

        \Mail::to($user)->send(new RegistrationEmail($user, $password));
    }
}