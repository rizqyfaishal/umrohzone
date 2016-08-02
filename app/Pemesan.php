<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemesan extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    public function user(){
        return $this->morphOne('App\User','user');
    }

}
