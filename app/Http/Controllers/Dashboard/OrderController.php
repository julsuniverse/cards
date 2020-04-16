<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\OrderIsPayedEmail;
use App\Mail\OrderIsReadyEmail;
use App\Mail\RegistrationEmail;
use App\Models\Order;
use App\Models\User;
use App\Services\ImageService;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = $order->user;
        return view('dashboard.order.show')->with(compact('order', 'user'));
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

            $order->update([
                'price' => $request->price,
                'status' => $request->status,
                'answer' => $request->answer,
            ]);

            if ($request->photo) {
                $imageService->destroyByEntityId('cards', $order->id);
                $photo = $imageService->store($order->id, $request->photo, 'orders');
                $order->update([
                    'photo' => $photo
                ]);
            }
            $adminEmail = env('ADMIN_EMAIL_PERSONAL');
            if ($order->status == Order::STATUS_READY && $oldStatus != Order::STATUS_READY) {
                Mail::to($order->user->email)->send(new OrderIsReadyEmail($order->user));
            } elseif ($order->status == Order::STATUS_PAYED && $oldStatus != Order::STATUS_PAYED) {
                Mail::to($order->user->email)->send(new OrderIsPayedEmail($order));
            } elseif ($request->status == Order::STATUS_ACCEPTED && $oldStatus != Order::STATUS_ACCEPTED) {
                $orderService = new OrderService();
                $orderService->accept($order);
            }
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.order.show', [$order]))->with('success', 'Заказ был обновлен!');
    }

    public function loginAs(User $user)
    {
        Auth::logout();
        Auth::login($user);
        return redirect()->route('cabinet');
    }

    public function acceptOrder(Order $order, OrderService $orderService)
    {
        try {
            $orderService->accept($order);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Заказ был принят!');
    }

    public function preview(Order $order)
    {
        return view('dashboard.order.preview')->with(compact('order'));
    }
}
