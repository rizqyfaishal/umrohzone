<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HotelRequest extends Request
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
            'nama' => 'required|min:3|max:50',
            'deskripsi' => 'required|min:6|max:255',
            'review' => 'required',
            'full_address' => 'required|min:4|max:100',
            'hotel_fasilitas' => 'required',
            'google_map_url' => 'required|url',
            'hotel_primary_lokasi' => 'required|in:Mekah,Madinah',
            'photos' => 'required|array'
        ];
    }
}
