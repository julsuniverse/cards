<?php

namespace App\Http\Controllers;

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
        return view('oder.select-order');
    }
}