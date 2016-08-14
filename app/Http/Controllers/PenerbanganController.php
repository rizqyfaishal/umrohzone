<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Penerbangan;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PenerbanganController extends Controller
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
        $this->page->setTitle('Penerbangan All');
        return view('data-entry.penerbangan.index')->with([
            'page' => $this->page,
            'penerbangans' => Penerbangan::with('pesawat','bandaraBerangkat','bandaraTujuan','terminalBerangkat','terminalTujuan')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Create Penerbangan');
        return view('data-entry.penerbangan.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PenerbanganRequest $request)
    {
        if($request->input('bandara_berangkat_id') == $request->input('bandara_tujuan_id')){
            Session::flash('bandara-input-error','Bandara berangkat dan tujuan tidak boleh sama!');
            return redirect()->back()->withInput($request->all());
        }
        if($request->input('terminal_berangkat_id') == $request->input('terminal_tujuan_id')){
            Session::flash('terminal-input-error','Terminal berangkat dan tujuan tidak boleh sama!');
            return redirect()->back()->withInput($request->all());
        }

        $penerbangan = Penerbangan::create($request->all());
        $waktu = Carbon::parse($penerbangan->tanggal_berangkat);
        $penerbangan->tanggal_tiba = $waktu->addHours((int) $request->input('waktu_tempuh'))->toDateTimeString();
        $penerbangan->save();
        if(is_null($penerbangan)){
            abort(500);
        }
        Session::flash('penerbangan-registered','Telah Ditambahkan');
        return redirect(action('PenerbanganController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbangan = Penerbangan::find($id);
        if(is_null($penerbangan)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $penerbangan
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
        $penerbangan = Penerbangan::find($id);
        if(is_null($penerbangan)){
            abort(404);
        }
        $this->page->setTitle('Penerbangan - edit');
        return view('data-entry.penerbangan.edit')->with([
            'page' => $this->page,
            'penerbangan' => $penerbangan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PenerbanganRequest $request, $id)
    {
        if($request->input('bandara_berangkat_id') == $request->input('bandara_tujuan_id')){
            Session::flash('bandara-input-error','Bandara berangkat dan tujuan tidak boleh sama!');
            return redirect()->back()->withInput($request->all());
        }
        if($request->input('terminal_berangkat_id') == $request->input('terminal_tujuan_id')){
            Session::flash('terminal-input-error','Terminal berangkat dan tujuan tidak boleh sama!');
            return redirect()->back()->withInput($request->all());
        }

        $penerbangan = Penerbangan::find($id);
        if(is_null($penerbangan)){
            abort(404);
        }
        $penerbangan->update($request->all());
        $waktu = Carbon::parse($penerbangan->tanggal_berangkat);
        $penerbangan->tanggal_tiba = $waktu->addHours((int) $request->input('waktu_tempuh'))->toDateTimeString();
        $penerbangan->save();
        Session::flash('penerbangan-registered','Telah Ditambahkan');
        return redirect(action('PenerbanganController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbangan = Penerbangan::find($id);
        if(is_null($penerbangan)){
            abort(404);
        }
        if(!$penerbangan->delete()){
            abort(500);
        }
        return redirect()->back();
    }
}
