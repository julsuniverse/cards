<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordRequest extends FormRequest
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
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function withValidator(\Illuminate\Validation\Validator $validator)
    {
        if ($validator->fails()) {
            \Session::flash('error', 'Please fix all mentioned erros!');
            \Session::flash('tab', 'password');
        }
    }
}