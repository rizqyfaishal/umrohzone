<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public function paket(){
        return $this->belongsTo('App\Paket','paket_id');
    }

}
