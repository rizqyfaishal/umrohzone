<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    public function provinsi(){
        return $this->belongsTo('App\Provinsi');
    }
}
