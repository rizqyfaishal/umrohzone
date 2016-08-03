<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttachmentCategory extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    public function attachments(){
        return $this->hasMany('App\Attachment','attachment_id');
    }
}
