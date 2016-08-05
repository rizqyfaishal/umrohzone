<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Helper\AttachmentHelper;
use App\Helper\PageDescription;
use App\Pesawat;
use App\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PesawatController extends Controller
{
    use AttachmentHelper;

    public function __construct(PageDescription $pageDescription)
    {
        $this->page = $pageDescription;
        $this->middleware('auth-admin',['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Pesawat All');
        return view('data-entry.pesawat.index')->with([
            'page' => $this->page,
            'pesawats' => Pesawat::paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Create Pesawat');
        return view('data-entry.pesawat.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PesawatRequest $request)
    {
        $pesawat = Pesawat::create($request->all());
        if(is_null($pesawat)){
            abort(500);
        }
        $rating = new Rating();
        $rating->rating_value = $request->input('rating');
        $bool = $rating->save();
        if(!$bool){
            $pesawat->delete();
            abort(500);
        }
        $pesawat->rating()->save($rating);
        $file = $request->file('logo');
        if(!is_null($file)){
            $pesawat->attachments()->save($this->saveFile($file));
        }
        Session::flash('pesawat-registered','Pesawat telah ditambahkan');
        return redirect(action('PesawatController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesawat = Pesawat::where('id','=',$id)->first();
        if(is_null($pesawat)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $pesawat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesawat = Pesawat::where('id','=',$id)->first();
        if(is_null($pesawat)){
            abort(404);
        }
        $this->page->setTitle('Pesawat Edit');
        return view('data-entry.pesawat.edit')->with([
            'pesawat' => $pesawat,
            'page' => $this->page
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PesawatRequest $request, $id)
    {
        $pesawat = Pesawat::where('id','=',$id)->first();
        if(is_null($pesawat)){
            abort(404);
        }
        $pesawat->update($request->all());
        $pesawat->rating()->update([
            'rating_value' => $request->input('rating')
        ]);
        $file = $request->file('logo');
        if(!is_null($file)){
           $this->saveFile($file);
        }
        Session::flash('pesawat-edited','Pesawat telah di edit');
        return redirect(action('PesawatController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesawat = Pesawat::where('id','=',$id)->first();
        if(is_null($pesawat)){
            abort(404);
        }
        $pesawat->delete();
        return redirect()->back();
    }
}
