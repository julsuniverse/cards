<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
{
    public function rules()
    {
        return [
          'cards' => 'required|string'
        ];
    }
}
