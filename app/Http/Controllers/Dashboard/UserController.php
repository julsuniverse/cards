<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::paginate(20);
        return view('dashboard.user.index')->with(compact('users'));
    }
}