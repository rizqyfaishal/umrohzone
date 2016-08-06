<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rekening extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    protected $table = 'rekening';
    protected $fillable = ['no_rekening','bank'];

    public function owner(){
        return $this->morphTo();
    }


}
