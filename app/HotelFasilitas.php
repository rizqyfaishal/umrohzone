<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelFasilitas extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['name'];

    public function hotel(){
        return $this->belongsTo('App\Hotel','hotel_id');
    }

    public function hotelFasilitas(){
        return $this->hasMany('App\HotelFasilitas','hotel_fasilitas_id');
    }


}
