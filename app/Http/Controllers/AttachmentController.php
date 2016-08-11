<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Helper\AttachmentHelper;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;

class AttachmentController extends Controller
{

    use AttachmentHelper;

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


    public function get($hashcode){
        $file = Attachment::where('hashcode','=',$hashcode)->first();
        if(is_null($file)){
            abort(404);
        }
        $dir = $this->helper->getHashDirectory($file->hashcode,$file->extension);
        $base = storage_path('app/');
        return response()->download($base.$dir,$file->filename,[
            'Content-Type' => $file->mime_types
        ]);
    }

    public function delete($hashcode){
        $file = Attachment::where('hashcode','=',$hashcode)->first();
        if(is_null($file)){
            abort(404);
        }

        $bool = $file->delete();
        if(!$bool){
            abort(500);
        }
        return redirect()->back();
    }

    public function savePhotos(Requests\SavePhotoRequest $request){

    }

    public function saveDocument(){

    }

    public function saveOther(){

    }

    public function saveScan(){

    }

    public function saveImages(){

    }

    public function savePhotosAJAX(){

    }

    public function saveDocumentAJAX(){

    }

    public function saveOtherAJAX(){

    }

    public function saveScanAJAX(){

    }

    public function saveImagesAJAX(){

    }


}