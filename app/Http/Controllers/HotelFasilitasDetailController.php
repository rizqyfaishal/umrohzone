<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\HotelFasilitasDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HotelFasilitasDetailController extends Controller
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
        $this->page->setTitle('Fasilitas Hotel Detail');
        return view('data-entry.hotel-fasilitas-detail.index')->with([
            'hotelFasilitasDetails' => HotelFasilitasDetail::paginate(15),
            'page' => $this->page
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Fasilitas Hotel Create');
        return view('data-entry.hotel-fasilitas-detail.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HotelFasilitasDetailRequest $request)
    {
        $r = HotelFasilitasDetail::create($request->all());
        if(is_null($r)){
            abort(500);
        }
        Session::flash('hotel-fasilitas-detail-registered','Fasilitas Hotel Detail telah ditambahkan');
        return redirect(action('HotelFasilitasDetailController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $u = HotelFasilitasDetail::where('id','=',$id)->first();
        if(is_null($u)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $u
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
        $u = HotelFasilitasDetail::where('id','=',$id)->first();
        if(is_null($u)){
            abort(404);
        }
        $this->page->setTitle($u->name . ' - edit');
        return view('data-entry.hotel-fasilitas-detail.edit')->with([
            'page' => $this->page,
            'hotelFasilitasDetail' => $u
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\HotelFasilitasDetailRequest $request, $id)
    {
        $u = HotelFasilitasDetail::where('id','=',$id)->first();
        if(is_null($u)){
            abort(404);
        }
        $bool = $u->update($request->all());
        if(!$bool){
            abort(500);
        }
        Session::flash('hotel-fasilitas-detail-edited','Fasilitas hotel detail telah teredit');
        return redirect(action('HotelFasilitasDetailController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = HotelFasilitasDetail::where('id','=',$id)->first();
        if(is_null($u)){
            abort(404);
        }
        $bool = $u->delete();
        if(!$bool){
            abort(500);
        }
        Session::flash('hotel-fasilitas-detail-deleted','Deleted!');
        return redirect()->back();
    }
}
