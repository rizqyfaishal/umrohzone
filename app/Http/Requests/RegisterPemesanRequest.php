<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterPemesanRequest extends Request
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
            'phone' => 'required|max:12',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nama' => 'required|min:3|max:50',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
