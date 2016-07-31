<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'hotel';

    protected $fillable = [
        'review', 'deskripsi'
    ];


}
