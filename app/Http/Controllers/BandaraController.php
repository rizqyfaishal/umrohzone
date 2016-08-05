<?php

namespace App\Http\Controllers;

use App\Bandara;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class BandaraController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->middleware('auth-admin',['except' => ['index','show']]);
        $this->page = $page;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Bandara All');
        return view('data-entry.bandara.index')->with([
            'page' =>$this->page,
            'bandaras' => Bandara::with('provinsi','kota')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Bandara Create');
        return view('data-entry.bandara.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BandaraRequest $request)
    {
        $bandara = Bandara::create($request->all());
        if(is_null($bandara)){
            abort(500);
        }
        Session::flash('bandara-registered','Bandara telah dibuat');
        return redirect(action('BandaraController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bandara = Bandara::where('id','=',$id)->first()->first();
        if(is_null($bandara)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $bandara
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
        $bandara = Bandara::where('id','=',$id)->first()->first();
        if(is_null($bandara)){
            abort(404);
        }
        $this->page->setTitle($bandara->nama . ' - edit');
        return view('data-entry.bandara.edit')->with([
            'page' => $this->page,
            'bandara' => $bandara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\BandaraRequest $request, $id)
    {
        $bandara = Bandara::where('id','=',$id)->first();
        if(is_null($bandara)){
            abort(404);
        }
        $bandara->update($request->all());
        Session::flash('bandara-edited','Bandara telah di edit');
        return redirect(action('BandaraController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bandara = Bandara::where('id','=',$id)->first();
        $bandara->delete();
        return redirect()->back();
    }
}
