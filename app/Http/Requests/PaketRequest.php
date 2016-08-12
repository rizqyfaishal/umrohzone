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
            'discount' => 'required|numeric',
            'pesawat_id' => 'required|integer|exists:pesawat,id',
            'agen_id' => 'required|integer|exists:agen,id',
            'manasik_id' => 'required|integer|exists:manasik,id',
            'paket_category_id' => 'required|integer|exists:paket_categories,id',
            'embarkasi_id' => 'required|integer|exists:embarkasis,id',
            'penerbangan_berangkat_id' => 'required|integer|exists:penerbangan,id',
            'penerbangan_pulang_id' => 'required|integer|exists:penerbangan,id'
        ];
    }
}
