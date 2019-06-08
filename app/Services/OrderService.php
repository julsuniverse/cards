<?php

namespace App\Services;

use App\Models\Order;
use App\Models\User;

class OrderService
{
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'dob' => $data['date'],
            'password' => '123456'
        ]);
        Order::create([
            'user_id' => $user->id,
            'layout_id' => $data['layout'] ?? null,
            'description' => $data['text'],
            'price' => $data['price']
        ]);

        //TODO: send email to user
    }
}