<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Testimoni;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TestimoniController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-pemesan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Testimoni All');
        return view('data-entry.testimoni.index')->with([
            'page' => $this->page,
            'testimonis' => Testimoni::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Create Testimoni');
        return view('data-entry.testimoni.create')->with([
            'page' => $this->page,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\TestimoniRequest $request)
    {
        $user = Auth::user()->testimoni()->save(Testimoni::create($request->all()));
        if(is_null($user)){
            abort(500);
        }
        Session::flash('testimoni-registered','Testimoni Ditambahkan');
        return redirect(action('TestimoniController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimoni = Testimoni::find($id);
        if(is_null($testimoni)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $testimoni
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
        $testimoni = Testimoni::find($id);
        if(is_null($testimoni)){
            abort(404);
        }
        $this->page->setTitle('Testimoni Edit');
        return view('data-entry.testimoni.edit')->with([
            'page' => $this->page,
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\TestimoniRequest $request, $id)
    {
        $testimoni = Testimoni::find($id);
        if(is_null($testimoni)){
            abort(404);
        }
        if(!$testimoni->update($request->all())){
            abort(500);
        }
        Session::flash('testimoni-edited','Testimoni Teredit');
        return redirect(action('TestimoniController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        if(is_null($testimoni)){
            abort(404);
        }
        if(!$testimoni->delete()){
            abort(500);
        }
        return redirect()->back();
    }
}
