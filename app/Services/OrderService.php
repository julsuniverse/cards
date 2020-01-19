<?php

namespace App\Services;

use App\Http\Requests\User\OrderRequest;
use App\Mail\RegistrationEmail;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OrderService
{
    public function create(OrderRequest $request)
    {
        try {
            $password = str_random(8);

            if (!$request->user) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'dob' => $request->date,
                    'password' => Hash::make($password)
                ]);
            } else {
                $user = User::find($request->user);
        }

            Order::create([
                'user_id' => $user->id,
                'layout_id' => $request->layout ?? null,
                'description' =>$request->text,
                'price' => $request->price
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['user' => $request->user]);
            throw new \DomainException('Order creating error');
        }


        if (!$request->user) {
            \Mail::to($user)->send(new RegistrationEmail($user, $password));
        }
    }
}