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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

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
