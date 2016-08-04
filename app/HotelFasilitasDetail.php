<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelFasilitasDetail extends Model
{
    protected $fillable = ['name'];

    use SoftDeletes;

    protected $dates = ['delete_at'];

    public function hotelFasilitas(){
        return $this->belongsTo('App\HotelFasilitas','hotel_fasilitas_id');
    }

    public function hotel(){
        return $this->hasManyThrough('App\Hotel','App\HotelFasilitas');
    }
}
