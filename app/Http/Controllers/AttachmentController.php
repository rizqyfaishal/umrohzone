<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;

class AttachmentController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->middleware('auth-admin');
    }

    public function index(){
        return response()->json([
            'status' => 'ok',
            'data' => Attachment::all()
        ]);
    }

    public function savePhotos(){

    }
}
