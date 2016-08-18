<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fasilitas extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at','pivot'];

    protected $table = 'fasilitas';

    protected $fillable = [
        'name', 'description'
    ];

    public function paket(){
        return $this->belongsToMany('App\Paket','paket_fasilitas_pivot','fasilitas_id');
    }
}
