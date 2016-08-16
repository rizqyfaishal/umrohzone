<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemesan extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at'];


    protected  $fillable = ['nama'];

    public function user(){
        return $this->morphOne('App\User','user');
    }

    public function paket(){
        return $this->belongsToMany('App\Paket','pemesan_paket_pivot','pemesan_id');
    }

}
