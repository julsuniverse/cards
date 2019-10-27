<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyCardRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'required|file',
            'type' => 'required|string',
        ];
    }
}