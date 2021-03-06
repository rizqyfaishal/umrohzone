<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terminal extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['nama'];
    protected $hidden = ['created_at','deleted_at','updated_at'];


    public function penerbanganBerangkat(){
        return $this->hasMany('App\Penerbangan',['terminal_berangkat_id','terminal_pulang_id']);
    }

    public function penerbanganTujuan(){
        return $this->hasMany('App\Penerbangan',['terminal_berangkat_id','terminal_pulang_id']);
    }
}
