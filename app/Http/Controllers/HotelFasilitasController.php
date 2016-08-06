<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\HotelFasilitas;
use App\HotelFasilitasDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HotelFasilitasController extends Controller
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
        $this->page->setTitle('Fasilitas Hotel All');
        return view('data-entry.hotel-fasilitas.index')->with([
            'page' => $this->page,
            'hotelFasilitass' => HotelFasilitas::with('hotels')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Hotel Fasilitas Create');
        return view('data-entry.hotel-fasilitas.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HotelFasilitasRequest $request)
    {
        $hf = HotelFasilitas::create($request->all());
        if(is_null($hf)){
            abort(500);
        }
        Session::flash('hotel-fasilitas-registered','Fasilitas Hotel telah dibuat');
        return redirect(action('HotelFasilitasController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t = HotelFasilitas::where('id','=',$id)->first()->load('hotel');
        return response()->json([
            'status' => 'ok',
            'data' => $t
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
        $t = HotelFasilitas::where('id','=',$id)->first();
        if(is_null($t)){
            abort(404);
        }
        $this->page->setTitle($t->name. ' - edit');
        return view('data-entry.hotel-fasilitas.edit')->with([
            'page' => $this->page,
            'hotelFasilitas' => $t
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\HotelFasilitasRequest $request, $id)
    {
        $t = HotelFasilitas::where('id','=',$id)->first();
        if(is_null($t)){
            abort(404);
        }
        $u = $t->update($request->all());
        if(!$u){
            abort(500);
        }
        Session::flash('hotel-fasilitas-edited','Fasilitas Hotel telah di edit');
        return redirect(action('HotelFasilitasController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = HotelFasilitas::where('id','=',$id)->first();
        if(is_null($t)){
            abort(404);
        }
        if(!$t->delete()){
            abort(500);
        }
        Session::flash('hotel-fasilitas-delete','Fasilitas Hotel Ter delete');
        return redirect()->back();
    }
}
