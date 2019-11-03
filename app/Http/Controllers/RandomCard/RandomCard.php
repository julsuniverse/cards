<?php

namespace App\Http\Controllers\RandomCard;

use App\Http\Requests\CardsRequest;
use App\Models\Card;
use App\Repositories\CardsRepository;
use Illuminate\Http\Response;

class RandomCard
{
    /**
     * @var CardsRepository
     */
    private $cardsRepository;

    public function __construct(CardsRepository $cardsRepository)
    {
        $this->cardsRepository = $cardsRepository;
    }

    public function getCard(CardsRequest $request)
    {
        try {
            $card = $this->cardsRepository->getRandom($request->type);
            return response()->json(['card' => $card], Response::HTTP_OK);
        } catch (\DomainException $e) {
            return response()->json(['error' => $e], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function dailyCard(string $type)
    {
        try {
            $card = $this->cardsRepository->getRandom($type);
            $title = Card::getTitle($type);
            return view('random-card.tarot-day')->with(compact('card', 'title'));
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}