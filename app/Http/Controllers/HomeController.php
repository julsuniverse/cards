<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;

class HomeController extends Controller
{
    public function setCards(CardRequest $request)
    {
        session(['cards' => $request->cards]);
        return redirect(route('order.index'));
    }
}
