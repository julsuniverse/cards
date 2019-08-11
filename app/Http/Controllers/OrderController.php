<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\OrderRequest;
use App\Models\Layout;
use App\Services\OrderService;

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

    public function textOrder(Layout $layout = null)
    {
        return view('order.text-order')->with(compact('layout'));
    }

    public function selectOrder()
    {
        $layouts = Layout::all()->groupBy('theme_id');
        return view('order.select-order')->with(compact('layouts'));
    }

    public function store(OrderRequest $request)
    {
        $this->orderService->create($request->all());
        return redirect()->route('order.success');
    }

    public function success()
    {
        return view('order.success');
    }
}