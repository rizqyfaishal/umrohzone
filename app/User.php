<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $hidden = ['created_at','deleted_at','updated_at','password','remember_token'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'password', 'email'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function user(){
        return $this->morphTo();
    }

    public function role(){
        return $this->belongsTo($this->user_type,'user_id');
    }

    public function isAdmin(){
        return $this->user_type == 'App\Admin';
    }

    public function isAgen(){
        return $this->user_type == 'App\Agen';
    }

    public function isJamaah(){
        return $this->user_type == 'App\Jamaah';
    }

    public function isPemesan(){
        return $this->user_type == 'App\Pemesan';
    }

    public function testimoni(){
        return $this->morphOne('App\Testimoni','testimoni');
    }

    public function rekening(){
        return $this->morphOne('App\Rekening','owner');
    }

}
