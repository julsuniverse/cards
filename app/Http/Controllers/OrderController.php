<?php

namespace App\Http\Controllers;

use App\Models\Layout;

class OrderController
{
    public function index()
    {
        return view('order.index');
    }

    public function textOrder()
    {
        return view('order.text-order');
    }

    public function selectOrder()
    {
        $layouts = Layout::all()->groupBy('theme_id');
        return view('order.select-order')->with(compact('layouts'));
    }
}