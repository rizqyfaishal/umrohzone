<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at','pivot'];

    protected $fillable = [
        'paket_id',
        'description',
        'tempat',
        'step_number'
    ];
    public function paket(){
        return $this->belongsTo('App\Paket','paket_id');
    }

}
