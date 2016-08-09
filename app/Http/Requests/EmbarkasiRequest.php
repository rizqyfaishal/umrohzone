<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmbarkasiRequest extends Request
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
            'nama' => 'required|min:3|max:40',
            'bandara_id' => 'required|integer',
            'provinsi_id' => 'required|integer',
            'regency_id' => 'required|integer'
        ];
    }
}
