<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use SoftDeletes;
    protected $hidden = ['created_at','deleted_at','updated_at','hotel_mekah_id','hotel_madinah_id','pesawat_id',
        'agen_id','penerbangan_berangkat_id','penerbangan_pulang_id','embarkasi_id','paket_category_id'
    ];


    protected $dates = ['delete_at'];

    protected $table = 'paket';

    protected $fillable = [
        'harga',
        'waktu',
        'durasi',
        'kuota',
        'discount',
        'agen_id',
        'pesawat_id',
        'hotel_mekah_id',
        'hotel_madinah_id',
        'pesawat_id',
        'manasik_id',
        'embarkasi_id',
        'paket_category_id',
        'penerbangan_berangkat_id',
        'penerbangan_pulang_id'
    ];

    public function penerbanganBerangkat(){
        return $this->belongsTo('App\Penerbangan','penerbangan_berangkat_id');
    }

    public function penerbanganPulang(){
        return $this->belongsTo('App\Penerbangan','penerbangan_pulang_id');
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
        return $this->belongsTo('App\Pesawat','pesawat_id');
    }

    public function hotelMekah(){
        return $this->belongsTo('App\Hotel','hotel_mekah_id');
    }

    public function hotelMadinah(){
        return $this->belongsTo('App\Hotel','hotel_madinah_id');
    }

    public function pemesan(){
        return $this->belongsToMany('App\Pemesan','pemesan_paket_pivot','paket_id');
    }


}
