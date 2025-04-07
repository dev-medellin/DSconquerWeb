<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // set to false if only certain users can use this
    }

    public function rules(): array
    {
        return [
            'username' => 'required|string|min:4|max:8|unique:accounts,username',
            'password' => 'required|string|min:8',
        ];
    }
}

