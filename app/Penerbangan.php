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
    ];

    public function pesawatBerangkat(){
        return $this->hasOne('App\Pesawat','pesawat_berangkat_id');
    }

    public function pesawatPulang(){
        return $this->hasOne('App\Pesawat','pesawat_pulang_id');
    }

    public function bandaraBerangkat(){
        return $this->hasOne('App\Bandara','bandara_berangkat_id');
    }

    public function bandaraPulang(){
        return $this->hasOne('App\Bandara','bandara_pulang_id');
    }

    public function terminalBerangkat(){
        return $this->hasOne('App\Terminal','terminal_berangkat_id');
    }

    public function terminalPulang(){
        return $this->hasOne('App\Terminal','terminal_pulang_id');
    }
}
