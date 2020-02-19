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
            'name' => 'required_without:user|string|max:255',
            'email' => 'required_without:user|email|unique:users|max:255',
            'date' => 'required_without:user|string|max:255',
            'text' => 'required',
            'user' => 'nullable',
            'cards' => 'string'
        ];
    }

    public function messages()
    {
        if(app()->getLocale() == 'ru') {
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
        } else {
            return [];
        }
    }
}
