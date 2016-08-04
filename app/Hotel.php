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
        'review', 'deskripsi', 'nama'
    ];

    public function fasilitas(){
        return $this->hasMany('App\HotelFasilitas','hotel_id');
    }

    public function attachments(){
        return $this->morphMany('App\Attachment','attach');
    }

    public function photos(){
        return $this->attachments()->where('attachment_category_id','=',4)->all();
    }

    public function logo(){
        return $this->attachments()->where('attachment_category_id','=',1)->first();
    }

    public function address(){
        return $this->morphOne('App\Address','address');
    }

}
