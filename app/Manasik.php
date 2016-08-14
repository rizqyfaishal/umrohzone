<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manasik extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at'];

    protected $table = 'manasik';

    protected $fillable = [
        'waktu_manasik'
    ];


    public function setWaktuManasikAttribute($r){
        $r = date('m/d/Y H:i',strtotime($r));
        $waktu = Carbon::createFromFormat('d/m/Y H:i',$r);
        $this->attributes['waktu_manasik'] = $waktu;
    }

    public function getWaktuManasikAttribute($date){
        return date('H:i',strtotime($date));
    }
    public function address(){
        return $this->morphOne('App\Address','address');
    }

}
