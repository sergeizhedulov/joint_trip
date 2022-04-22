<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            // 'login' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min: 5'],
            // 'access_level' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Заполните поле :attribute'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'ФИО пользователя',
            // 'login' => 'Логин',
            'password' => 'Пароль',

        ];
    }
}
