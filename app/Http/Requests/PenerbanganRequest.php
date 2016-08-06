<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PenerbanganRequest extends Request
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
            'tanggal_berangkat' => 'required|date',
            'waktu_tempuh' => 'required',
            'bandara_berangkat_id' => 'required|integer|exists:bandaras,id',
            'bandara_tujuan_id' => 'required|integer|exists:bandaras,id',
            'pesawat_id' => 'required|integer|exists:pesawat,id',
            'terminal_berangkat_id' => 'required|integer|exists:terminals,id',
            'terminal_tujuan_id' => 'required|integer|exists:terminals,id',
        ];
    }
}
