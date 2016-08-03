<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Embarkasi extends Model
{
    protected $fillable = ['nama','bandara_id','provinsi_id','regency_id'];

    use SoftDeletes;
    protected $dates = ['delete_at'];

    public function provinsi(){
        return $this->belongsTo('App\Provinsi','provinsi_id');
    }

    public function kota(){
        return $this->belongsTo('App\Regency','regency_id');
    }

    public function bandara(){
           return $this->belongsTo('App\Bandara','bandara_id');
    }

}
