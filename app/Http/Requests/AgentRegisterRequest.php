<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AgentRegisterRequest extends Request
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
            'password_confirmation' => 'required',
            'nama_agen' => 'required|max:50|min:3',
            'address' => 'required|min:5|max:255',
            'provinsi' => 'required',
            'kota' => 'required',
            'phone2' => 'required|max:12',
            'direktur' => 'required|min:3|max:50',
            'phone_direktur' => 'required|max:12',
            'logo' => 'required|mimes:jpg,jpeg',
            'bank' => 'required|max:50|min:2',
            'no_rekening' => 'required|max:255',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
