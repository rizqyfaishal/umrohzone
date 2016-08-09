<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $fillable = [
        'rating_value'
    ];

    protected $table = 'rating';

    public function rating(){
        return $this->morphTo();
    }

    public function getRatingTypeFor(){
        return substr($this->rating_type,4);
    }

}
