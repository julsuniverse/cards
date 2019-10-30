<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DailyCardRequest;
use App\Http\Requests\DailyCardUpdateRequest;
use App\Models\Card;
use App\Repositories\CardsRepository;
use Illuminate\Http\Request;

class RandomCardController extends Controller
{
    /**
     * @var CardsRepository
     */
    private $cardsRepository;

    public function __construct(CardsRepository $cardsRepository)
    {
        $this->cardsRepository = $cardsRepository;
    }

    public function index(string $type)
    {
        $types = [];
        if ($type == Card::TYPE_TAROT || $type == Card::TYPE_TAROT_DAY || $type == Card::TYPE_TAROT_ADVICE || $type == Card::TYPE_TAROT_LOVE) {
            $types = [Card::TYPE_TAROT_DAY, Card::TYPE_TAROT_ADVICE, Card::TYPE_TAROT_LOVE];
        } elseif ($type == Card::TYPE_LENORMAND) {
            $types = [Card::TYPE_LENORMAND];
        } elseif ($type == Card::TYPE_RUNES) {
            $types = [Card::TYPE_RUNES];
        }
        $cards = Card::whereIn('type', $types)->get();
        return view('dashboard.random-card.index')->with(compact('cards', 'type'));
    }

    public function create(string $type)
    {
        $types = Card::getTypesArray($type);
        return view('dashboard.random-card.create')->with(compact('types', 'type'));
    }

    public function store(Request $request)
    {
        try {
            $this->cardsRepository->save($request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.daily-card.index', ['type' => $request->type]))->with('success', 'Карта была сохранена!');
    }

    public function edit(Card $daily_card)
    {
        $types = Card::getAllTypes();
        $card = $daily_card;
        return view('dashboard.random-card.edit')->with(compact('card', 'types'));
    }

    public function update(DailyCardUpdateRequest $request, Card $daily_card)
    {
        try {
            $this->cardsRepository->update($request, $daily_card);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.daily-card.index', ['type' => $request->type]))->with('success', 'Карта была обновлена!');

    }
}