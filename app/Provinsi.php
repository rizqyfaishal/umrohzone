<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $hidden = ['created_at','deleted_at','updated_at'];


    public function regencies(){
        return $this->hasMany('App\Regency');
    }

}
