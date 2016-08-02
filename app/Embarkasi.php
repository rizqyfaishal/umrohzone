<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Embarkasi extends Model
{
    protected $fillable = ['nama','bandara'];

    use SoftDeletes;
    protected $dates = ['delete_at'];


}
