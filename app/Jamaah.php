<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jamaah extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $fillable = [
        'nama', 'mahrom'
    ];


}
