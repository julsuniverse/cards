<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')
            ->with('layout')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return view('dashboard.order.index')->with(compact('orders'));
    }

    public function show(Order $order)
    {
        return view('dashboard.order.show')->with(compact('order'));
    }
}