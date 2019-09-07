<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ImageRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer',
            'image' => 'required_without:image_link|image',
            'image_link' => 'required_without:image|string',
            'folder' => [
                'required',
                Rule::in(['order']),
            ],
        ];
    }

    /**
     * @param Validator $validator
     * @throws \Illuminate\Validation\ValidationException
     */
    public function failedValidation(Validator $validator)
    {
        $errors = [
            "message" => "The giving data was invalid.",
            "errors" => $validator->errors()
        ];
        throw new HttpResponseException(response()->json($errors, Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}