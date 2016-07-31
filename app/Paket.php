<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'paket';

    protected $fillable = [
        'harga',
        'waktu',
        'durasi',
        'lokasi_berangkat',
        'kuota',
        'discount',
    ];
}
