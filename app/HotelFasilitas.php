<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelFasilitas extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['name'];


    public function hotels(){
        return $this->belongsToMany('App\Hotel','hotel_hotel_fasilitas','hotel_fasilitas_id');
    }

    public function details(){
        return $this->hasMany('App\HotelFasilitasDetail');
    }



}
