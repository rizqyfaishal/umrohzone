<?php
/**
 * Created by PhpStorm.
 * User: Rizqy
 * Date: 4/17/2016
 * Time: 11:50 AM
 */

namespace App\Helper;


class AttachmentHelper
{
    public function getHashDirectory($hashedFileName,$extension){
        return implode('/', str_split(substr($hashedFileName, 0, 30), 3)).'.'.$extension;
    }

}