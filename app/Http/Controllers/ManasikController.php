<?php

namespace App\Http\Controllers;

use App\Address;
use App\Helper\PageDescription;
use App\Manasik;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ManasikController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Manasik All');
        return view('data-entry.manasik.index')->with([
            'page' => $this->page,
            'manasiks' => Manasik::with('address')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Manasik Create');
        return view('data-entry.manasik.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ManasikRequest $request)
    {
        $manasik = Manasik::create($request->all());
        if(is_null($manasik)){
            abort(500);
        }
        $manasik->address()->save(Address::create($request->all()));
        Session::flash('manasik-registered','Telah ditambahkan');
        return redirect(action('ManasikController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manasik = Manasik::find($id);
        if(is_null($manasik)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $manasik
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
        $manasik = Manasik::find($id);
        if(is_null($manasik)){
            abort(404);
        }
        $this->page->setTitle('Manasik Edit');
        return view('data-entry.manasik.edit')->with([
            'page' => $this->page,
            'manasik' => $manasik
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ManasikRequest $request, $id)
    {
        $manasik = Manasik::find($id);
        if(is_null($manasik)){
            abort(404);
        }
        if(!$manasik->update($request->all())){
            abort(500);
        }
        $manasik->address->update($request->all());
        Session::flash('manasik-edited','Manasik telah diedit');
        return redirect(action('ManasikController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manasik = Manasik::find($id);
        if(is_null($manasik)){
            abort(404);
        }
        if(!$manasik>delete()){
            abort(500);
        }
        return redirect()->back();
    }
}
