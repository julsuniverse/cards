<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardsRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|string|max:255',
        ];
    }
}