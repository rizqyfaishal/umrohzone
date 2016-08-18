<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PesawatRequest extends Request
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
            'nama' => 'required|min:3|max:60',
            'jenis' => 'required|min:3|max:100',
            'kelas' => 'required|min:3|max:80',
            'makanan' => 'required',
            'hiburan' => 'required',
            'penghargaan' => 'required',
            'photos' => 'required|array',
//            'logo' => 'required|mimes:jpg,jpeg,png'
        ];
    }
}
