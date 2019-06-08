<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('orders')->first();
        return view('user.cabinet.index')->with(compact('user'));
    }
}