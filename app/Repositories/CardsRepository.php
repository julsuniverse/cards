<?php

namespace App\Repositories;

use App\Http\Requests\DailyCardRequest;
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
        try {
            $cards = Card::where('type', $type)->get();
        } catch (\Exception $e) {
            throw new \DomainException('Card selecting error');
        }
        return $cards->random();
    }


    public function save(Request $request)
    {
        try {
            $image = '';
            $text_en = explode('<p data-f-id="pbf"', $request->description_en)[0];
            $text_ru = explode('<p data-f-id="pbf"', $request->description_ru)[0];
            $card = Card::create([
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'description_ru' => $text_ru,
                'description_en' => $text_en,
                'image' => $image,
                'type' => $request->type,
            ]);
            $image = $this->imageService->store($card->id, $request->image, 'cards');
            $card->update([
                'image' => $image
            ]);
        } catch (\Exception $e) {
            throw new \DomainException($e->getMessage());
            throw new \DomainException('Card creating error');
        }
    }

    public function update(DailyCardRequest $request, Card $card)
    {
        try {
            $image = '';
            $text_en = explode('<p data-f-id="pbf"', $request->description_en)[0];
            $text_ru = explode('<p data-f-id="pbf"', $request->description_ru)[0];
            $card->update([
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'description_ru' => $text_ru,
                'description_en' => $text_en,
                'image' => $image,
                'type' => $request->type,
            ]);
            $this->imageService->destroyByEntityId('cards', $card->id);
            $image = $this->imageService->store($card->id, $request->image, 'cards');
            $card->update([
                'image' => $image
            ]);
        } catch (\Exception $e) {
            throw new \DomainException($e->getMessage());
            throw new \DomainException('Card updating error');
        }
    }
}