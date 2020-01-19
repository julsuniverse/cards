<?php

namespace App\Repositories;

use App\Http\Requests\DailyCardRequest;
use App\Http\Requests\DailyCardUpdateRequest;
use App\Models\Card;
use App\Services\ImageService;
use Illuminate\Http\Request;

class CardsRepository
{
    /**
     * @var ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * @param string $type
     * @return \Illuminate\Support\Collection|mixed
     */
    public function getRandom(string $type)
    {
        $cards = Card::where('type', $type)->get();
        if ($cards->isEmpty()) {
            throw new \DomainException(__('random-card.empty-deck'));
        }
        return $cards->random();
    }


    public function save(Request $request)
    {
        try {
            $image = '';
            $card = Card::create([
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'description_ru' => $request->description_ru,
                'description_en' => $request->description_en,
                'image' => $image,
                'type' => $request->type,
            ]);
            $image = $this->imageService->store($card->id, $request->image, 'cards');
            $card->update([
                'image' => $image
            ]);
        } catch (\Exception $e) {
            throw new \DomainException('Card creating error');
        }
    }

    public function update(DailyCardUpdateRequest $request, Card $card)
    {
        try {
            $image = '';
            $card->update([
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'description_ru' => $request->description_ru,
                'description_en' => $request->description_en,
                'type' => $request->type,
            ]);

            if ($request->image) {
                $this->imageService->destroyByEntityId('cards', $card->id);
                $image = $this->imageService->store($card->id, $request->image, 'cards');
                $card->update([
                    'image' => $image
                ]);
            }
        } catch (\Exception $e) {
            throw new \DomainException('Card updating error');
        }
    }
}