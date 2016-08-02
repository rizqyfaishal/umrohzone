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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'password', 'email'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function user(){
        return $this->morphTo();
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

}
