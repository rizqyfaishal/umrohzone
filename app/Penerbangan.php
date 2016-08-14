<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbangan extends Model
{
    protected $table = 'penerbangan';
    protected $hidden = ['created_at','deleted_at','updated_at'];

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
        'jenis_penerbangan'
    ];

    public function getTanggalBerangkatAttribute($value){
        return Carbon::parse($value)->toDayDateTimeString();
    }

    public function setTanggalBerangkatAttribute($r){
        $r = date('m/d/Y H:i',strtotime($r));
        $waktu = Carbon::createFromFormat('d/m/Y H:i',$r);
        $this->attributes['tanggal_berangkat'] = $waktu->toDateTimeString();
    }

    public function getTanggalTibaAttribute($value){
        return Carbon::parse($value)->toDayDateTimeString();
    }

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
