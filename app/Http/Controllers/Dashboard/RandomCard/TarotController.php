<?php

namespace App\Http\Controllers\Dashboard\RandomCard;

use App\Http\Controllers\Controller;
use App\Models\Card;

class TarotController extends Controller
{
    public function index()
    {
        $types = [Card::TYPE_TAROT_DAY, Card::TYPE_TAROT_ADVICE, Card::TYPE_TAROT_LOVE];
        $cards = Card::whereIn('type', $types)->get();
        return view('dashboard.random-card.index')->with(compact('cards'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}