<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Address extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $fillable = ['full_address'];

    public function address(){
        return $this->morphTo();
    }
}
