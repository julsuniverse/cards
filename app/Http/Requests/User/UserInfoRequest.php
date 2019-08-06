<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'date' => 'required|string|max:255',
        ];
    }

    public function withValidator(\Illuminate\Validation\Validator $validator)
    {
        if ($validator->fails()) {
            \Session::flash('error', 'Please fix all mentioned erros!');
            \Session::flash('tab', 'info');
        }
    }
}