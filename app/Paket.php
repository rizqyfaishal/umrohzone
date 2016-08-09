<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'paket';

    protected $fillable = [
        'harga',
        'waktu',
        'durasi',
        'lokasi_berangkat',
        'kuota',
        'discount',
    ];

    public function penerbanganBerangkat(){
        return $this->belongsTo('App\Penerbangan','penerbangan_berangkat_id');
    }

    public function penerbanganTujuan(){
        return $this->belongsTo('App\Penerbangan','penerbangan_tujuan_id');
    }

    public function embarkasi(){
        return $this->belongsTo('App\Embarkasi','embarkasi_id');
    }

    public function paketCategory(){
        return $this->belongsTo('App\PaketCategory','paket_category_id');
    }

    public function manasik(){
        return $this->belongsTo('App\Manasik','manasik_id');
    }

    public function fasilitas(){
        return $this->belongsTo('App\Fasilitas','fasilitas_id');
    }

    public function agen()
    {
        return $this->belongsTo('App\Agen','agen_id');
    }

    public function pesawat()
    {
        return $this->belongsTo('App\Pesawat');
    }

    public function hotelMekah(){
        return $this->belongsTo('App\Hotel','hotel_mekah_id');
    }

    public function hotelMadinah(){
        return $this->belongsTo('App\Hotel','hotel_madinah_id');
    }


}
