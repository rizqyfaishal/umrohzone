<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelFasilitas extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at'];


    protected $fillable = ['name','hotel_fasilitas_category_id'];


    public function hotels(){
        return $this->belongsToMany('App\Hotel','hotel_hotel_fasilitas','hotel_fasilitas_id');
    }

    public function category(){
        return $this->belongsTo('App\HotelFasilitasCategory','hotel_fasilitas_category_id');
    }



}
