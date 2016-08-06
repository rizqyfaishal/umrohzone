<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bandara extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $fillable = ['nama','provinsi_id','regency_id'];

    public function provinsi(){
        return $this->belongsTo('App\Provinsi','provinsi_id');
    }

    public function kota(){
        return $this->belongsTo('App\Regency','regency_id');
    }

    public function penerbanganBerangkat(){
        return $this->hasMany('App\Penerbangan','bandara_berangkat_id');
    }

    public function penerbanganTujuan(){
        return $this->hasMany('App\Penerbangan','bandara_tujuan_id');
    }


}
