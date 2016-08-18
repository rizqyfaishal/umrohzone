<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $hidden = ['created_at','deleted_at','updated_at','uploaded_at','attach_type','attach_id'
    ,'extension','filename','mime_type','attachment_category_id','size'];


    public function attachment(){
        return $this->morphTo();
    }


}
