<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\OrderRequest;
use App\Models\Layout;
use App\Services\OrderService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class OrderController
{
    /** @var OrderService $orderService */
    private $orderService;

    public function __construct(OrderService $orderService)
    {
     $this->orderService = $orderService;
    }

    public function index()
    {
        return view('order.index');
    }

    public function video()
    {
        if (App::getLocale() == 'en') {
            return redirect()->route('home');
        }
        return view('order.video');
    }

    public function textOrder(Layout $layout = null)
    {
        $user = Auth::user();
        $cards =  session('cards', 'tarot');
        return view('order.text-order')->with(compact('layout', 'user', 'cards'));
    }

    public function selectOrder()
    {
        $layouts = Layout::all()->groupBy('theme_id');
        return view('order.select-order')->with(compact('layouts'));
    }

    public function videoOrder(Layout $layout = null)
    {
        if (App::getLocale() == 'en') {
            return redirect()->route('home');
        }
        $user = Auth::user();
        $cards =  session('cards', 'tarot');
        return view('order.video-order')->with(compact('user', 'cards'));
    }

    public function store(OrderRequest $request)
    {
        try {
            $user = $this->orderService->create($request);
            Auth::login($user);
        } catch (\DomainException $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('order.success');
    }

    public function storeVideo(OrderRequest $request)
    {
        try {
            $user = $this->orderService->create($request, true);
            Auth::login($user);
        } catch (\DomainException $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('order.success');
    }

    public function success()
    {
        $isUserOld = Auth::user();
        return view('order.success', compact('isUserOld'));
    }
}
