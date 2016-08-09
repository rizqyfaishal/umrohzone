<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaketRequest extends Request
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
            'harga' => 'required',
            'waktu' => 'required|date',
            'durasi' => 'required',
            'hotel_mekah_id' => 'required|integer|exists:hotel,id',
            'hotel_madinah_id' => 'required|integer|exists:hotel,id',
            'kuota' => 'required',
            'discount' => 'required|decimal',
            ''
        ];
    }
}
