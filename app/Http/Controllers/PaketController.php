<?php

namespace App\Http\Controllers;

use App\Agen;
use App\Helper\PageDescription;
use App\Hotel;
use App\Paket;
use App\Penerbangan;
use App\Pesawat;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PaketController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->middleware('auth-admin',['except' => ['show']]);
        $this->page = $page;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Paket All');
        return view('data-entry.paket.index')->with([
            'page' => $this->page,
            'pakets' => Paket::with('paketCategory','hotelMekah','hotelMadinah','pesawat')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Paket Create');
        return view('data-entry.paket.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PaketRequest $request)
    {
        $paket = Paket::create($request->all());
        $paket->setSisaKuota();
        $paket->save();
        if(is_null($paket)){
            abort(500);
        }
        Session::flash('paket-registered','Telah Ditambahkan');
        return redirect(action('PaketController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->load('agen.attachments','hotelMekah','hotelMadinah','pesawat.logo','embarkasi')
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
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        $this->page->setTitle('Paket Edit');
        return view('data-entry.paket.edit')->with([
            'page' => $this->page,
            'paket' => $paket
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PaketRequest $request, $id)
    {
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        $t = $paket->update($request->all());
        if(!$t){
            abort(500);
        }
        $paket->setSisaKuota();
        $paket->save();
        Session::flash('paket-edited','Telah Teredit');

        return redirect(action('PaketController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        $t = $paket->delete();
        if(!$t){
            abort(500);
        }
        Session::flash('paket-deleted','Delete');
        return redirect()->back();
    }


}
