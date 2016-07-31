<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbangan extends Model
{
    protected $table = 'penerbangan';

    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $fillable = [
        'tanggal_berangkat',
        'waktu_tempuh',
        'bandara',
        'terminal',
        'kode_booking_bnb'
    ];


}
