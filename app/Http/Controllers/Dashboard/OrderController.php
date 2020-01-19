<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\OrderIsPayedEmail;
use App\Mail\OrderIsReadyEmail;
use App\Models\Order;
use App\Services\ImageService;
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
        $order = Order::where('id',$order->id)->with('user')->with('layout')->first();
        return view('dashboard.order.edit')->with(compact('order'));
    }

    public function update(Request $request, Order $order, ImageService $imageService)
    {
        try {
            $oldStatus = $order->status;
            $photo = '';

            $order->update([
                'price' => $request->price,
                'status' => $request->status,
                'answer' => $request->answer,
                'photo' => $photo
            ]);

            $photo = $imageService->store($order->id, $request->photo, 'orders');
            $order->update([
                'photo' => $photo
            ]);

            if ($order->status == Order::STATUS_READY_FOR_PAYMENT && $oldStatus != Order::STATUS_READY_FOR_PAYMENT) {
                Mail::to($order->user->email)->send(new OrderIsReadyEmail($order->user->locale ?? 'en'));
            } elseif ($order->status == Order::STATUS_PAYED && $oldStatus != Order::STATUS_PAYED) {
                Mail::to($order->user->email)->send(new OrderIsPayedEmail($order->user->locale ?? 'en', $order));
            }
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.order.show', [$order]))->with('success', 'Заказ был обновлен!');

    }
}