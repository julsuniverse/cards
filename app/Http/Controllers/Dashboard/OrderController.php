<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\OrderIsReadyEmail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function edit(Order $order)
    {
        $order = $order->with('user')->with('layout')->first();
        return view('dashboard.order.edit')->with(compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        try {
            $order->update($request->input());
            if ($order->status == Order::STATUS_READY_FOR_PAYMENT) {
                Mail::to($order->user->email)->send(new OrderIsReadyEmail($order->user->locale ?? 'en'));
            }
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.order.show', [$order]))->with('success', 'Заказ был обновлен!');

    }
}