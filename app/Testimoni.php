<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['description'];

    public function testimoni(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo($this->testimoni_type,'testimoni_id');
    }

    public function author(){
        $user = $this->user;
        return $user->role;
    }
}
