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
        'terminal_berangkat_id',
        'terminal_tujuan_id',
        'bandara_tujuan_id',
        'bandara_berangkat_id',
        'pesawat_id',
    ];

    public function pesawat(){
        return $this->belongsTo('App\Pesawat','pesawat_id');
    }

    public function bandaraBerangkat(){
        return $this->belongsTo('App\Bandara','bandara_berangkat_id');
    }

    public function bandaraTujuan(){
        return $this->belongsTo('App\Bandara','bandara_tujuan_id');
    }

    public function terminalBerangkat(){
        return $this->belongsTo('App\Terminal','terminal_berangkat_id');
    }

    public function terminalTujuan(){
        return $this->belongsTo('App\Terminal','terminal_tujuan_id');
    }
}
