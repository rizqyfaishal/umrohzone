<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesawat extends Model
{
    use SoftDeletes;
    protected $hidden = ['created_at','deleted_at','updated_at'];

    protected $dates = ['delete_at'];

    protected $table = 'pesawat';

    protected $fillable = [
        'nama',
        'jenis',
        'kelas',
        'makanan',
        'hiburan',
        'penghargaan'
    ];

    public function attachments(){
        return $this->morphMany('App\Attachment','attach');
    }

    public function logo(){
        $attachments = $this->attachments();
        return $attachments->where('attachment_category_id','=',1);
    }

    public function photos(){
        $attachments = $this->attachments();
        return $attachments->where('attachment_category_id','=',4);
    }

    public function rating(){
        return $this->morphOne('App\Rating','rating');
    }

    public function penerbangan(){
        return $this->hasMany('App\Penerbangan','pesawat_id');
    }


}
