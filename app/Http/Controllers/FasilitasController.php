<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class FasilitasController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin',['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('json')){
            return response()->json([
                'status' => true,
                'data' => Fasilitas::all()
            ]);
        }
        $this->page->setTitle('Fasilitas All');
        return view('data-entry.fasilitas.index')->with([
            'page' => $this->page,
            'fasilitass' => Fasilitas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Fasilitas Create');
        return view('data-entry.fasilitas.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FasilitasRequest $request)
    {
        $fasilitas = Fasilitas::create($request->all());
        if(is_null($fasilitas)){
            abort(500);
        }
        Session::flash('fasilitas-registered','Telah Ditambahkan');
        return redirect(action('FasilitasController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);
        if(is_null($fasilitas)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $fasilitas
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
        $fasilitas = Fasilitas::find($id);
        if(is_null($fasilitas)){
            abort(404);
        }
        $this->page->setTitle($fasilitas->name. ' - edit');
        return view('data-entry.fasilitas.edit')->with([
            'page' => $this->page,
            'fasilitas' => $fasilitas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FasilitasRequest $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        if(is_null($fasilitas)){
            abort(404);
        }
        if(!$fasilitas->update($request->all())){
            abort(500);
        }
        Session::flash('fasilitas-edited','Fasilitas telah teredit');
        return redirect(action('FasilitasController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        if(is_null($fasilitas)){
            abort(404);
        }
        if(!$fasilitas->delete()){
            abort(500);
        }
        return redirect()->back();
    }
}
