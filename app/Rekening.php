<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rekening';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'bank', 'no_rek'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
