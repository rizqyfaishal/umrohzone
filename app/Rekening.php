<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rekening extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'pesawat';


}
