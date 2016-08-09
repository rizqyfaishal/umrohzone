<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manasik extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'manasik';

    protected $fillable = [
        'waktu_manasik'
    ];

    public function address(){
        return $this->morphOne('App\Address','address');
    }

}
