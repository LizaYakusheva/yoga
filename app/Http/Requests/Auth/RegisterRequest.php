<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', Rule::unique(User::class, 'phone')],
            'password' => ['required', 'string', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'phone.unique' => 'Такой номер телефона уже существует',
            'name.required' => 'Заполните имя',
            'name.max' => 'Максимально 255 символов',
            'phone.required' => 'Заполните номер телефона',
            'password.required' => 'Заполните пароль',
            'password.min' => 'Минимум 5 символов'
        ];
    }
}
