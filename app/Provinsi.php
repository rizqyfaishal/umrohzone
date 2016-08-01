<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public function regencies(){
        return $this->hasMany('App\Regency');
    }
}
