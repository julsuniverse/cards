<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class OrderRequest
 * @package App\Http\Requests\User
 */
class OrderRequest extends FormRequest
{
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'date' => 'required|string|max:255',
            'text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя',
            'email.required' => 'Введите email',
            'date.required' => 'Введите дату рождения',
            'text.required' => 'Опишите свою ситуацию',
            'name.max' => 'Максимальная длина - 255 символов',
            'email.max' => 'Максимальная длина - 255 символов',
            'date.max' => 'Максимальная длина - 255 символов',
            'email.email' => 'Введите валидный email',
            'email.unique' => 'Пользователь с таким email уже существует. Введите другой имейл или войдите в свой аккаунт.',
        ];
    }
}