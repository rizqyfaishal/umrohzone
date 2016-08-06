<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketCategory extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['name','base_price'];

    public function pakets(){
        return $this->hasMany('App\Paket','paket_category_id');
    }
}
