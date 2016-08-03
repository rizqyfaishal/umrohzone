<?php

namespace App\Http\Controllers;

use App\Embarkasi;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class EmbarkasiController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Embarkasi All');
        return view('data-entry.embarkasi.index')->with([
            'page' => $this->page,
            'embarkasis' => Embarkasi::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Embarkasi Create');
        return view('data-entry.embarkasi.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\EmbarkasiRequest $request)
    {
        $embarkasi = Embarkasi::create($request->all());
        Session::flash('embarkasi-registered','Telah Ditambahkan');
        return redirect(action('EmbarkasiController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $embarkasi = Embarkasi::where('id','=',$id)->first();
        return response()->json([
            'status' => 'ok',
            'data' => $embarkasi
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
        $embarkasi = Embarkasi::where('id','=',$id)->first();
        if(is_null($embarkasi)){
            return response()->json([
                'status' => 'error',
                'message' => '404'
            ]);
        }
        $this->page->setTitle($embarkasi->name . ' - edit');
        return view('data-entry.embarkasi.edit')->with([
            'embarkasi' => $embarkasi,
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
    public function update(Requests\EmbarkasiRequest $request, $id)
    {
        $embarkasi = Embarkasi::where('id','=',$id)->first();
        if(is_null($embarkasi)){
            abort(404);
        }
        $embarkasi->update($request->all());
        Session::flash('embarkasi-edited','Embarkasi telah teredit');
        return redirect(action('EmbarkasiController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $embarkasi = Embarkasi::where('id','=',$id)->first();
        $embarkasi->delete();
        return redirect()->back();
    }
}
