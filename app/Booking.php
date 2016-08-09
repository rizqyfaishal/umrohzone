<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'booking';

    protected $fillable = [
        'kode_booking',
        'status_payment',
        'status_dokumen',
        'status_visa',
        'no_resi'
    ];
}
