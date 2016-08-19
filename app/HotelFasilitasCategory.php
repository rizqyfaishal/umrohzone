<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelFasilitasCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];
    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at'];


    public function fasilitas(){
        return $this->hasMany('App\HotelFasilitas');
    }
}
