<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Hotel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
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
        $this->page->setTitle('Hotel All');
        return view('data-entry.hotel.index')->with([
            'page' => $this->page,
            'hotels' => Hotel::paginate(13)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Hotel Create');
        return view('data-entry.hotel.create')->with([
            'page' => $this->page,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HotelRequest $request)
    {
        $hotel = Hotel::create($request->all());
        if(is_null($hotel)){
            abort(500);
        }
        Session::flash('hotel-registered','Hotel Telah dibuat');
        return redirect(action('HotelController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::where('id','=',$id)->first();
        return response()->json([
            'status' => 'ok',
            'data' => $hotel
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
        $hotel = Hotel::where('id','=',$id)->first();
        if(is_null($hotel)){
            abort(404);
        }
        $this->page->setTitle($hotel->nama.' - edit');
        return view('data-entry.hotel.edit')->with([
            'page' => $this->page,
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\HotelRequest $request, $id)
    {
        $hotel = Hotel::where('id','=',$id)->first();
        if(is_null($hotel)){
            abort(404);
        }
        $hotel->update($request->all());
        Session::flash('hotel-edited','Hotel telah diedit');
        return redirect(action('HotelController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hotel = Hotel::where('id','=',$id)->first();
        if(is_null($hotel)){
            abort(404);
        }
        $bool = $hotel->delete();
        if(!$hotel){
            abort(500);
        }
        return redirect()->back();
    }
}
