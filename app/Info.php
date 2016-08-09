<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'info';

    protected $fillable = [
        'syarat', 'agenda'
    ];
}
