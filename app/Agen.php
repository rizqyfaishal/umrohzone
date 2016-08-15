<?php

namespace App;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agen extends Model
{
    use SoftDeletes;

    protected $table = 'agen';

    protected $fillable = [
        'no_agen','direktur','phone_direktur','nama_agen','provinsi_id','regency_id','phone2'
    ];

    protected $dates = [
        'delete_at'
    ];

    public function generateNoAgen(){
        $id = $this->id;
        $hashid = new \Hashids\Hashids('18uy84I9gzZecYGlXdFpEM0URaWyVp+WfhRrxLkMOYE',6,'1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $noAgen = $hashid->encode($id);
        $this->no_agen = $noAgen;
        $this->save();
    }

    public function user(){
        return $this->morphOne('App\User','user');
    }

    public function alamat(){
        return $this->morphOne('App\Address','address');
    }

    public function rating(){
        return $this->morphOne('App\Rating','rating');
    }

    public function attachments(){
        return $this->morphMany('App\Attachment','attach');
    }

    public function jamaah(){
        return $this->hasMany('App\Jamaah');
    }

    public function pemesan(){
        return $this->hasMany('App\Pemesan');
    }

    public function logo(){
        return $this->attachments()->where('category_id','=',1);
    }

    public function provinsi(){
        return $this->hasOne('App\Provinsi');
    }

    public function regency(){
        return $this->hasOne('App\Regency');
    }

    public function rekening(){
        return $this->morphOne('App\Rekening','owner');
    }
}
