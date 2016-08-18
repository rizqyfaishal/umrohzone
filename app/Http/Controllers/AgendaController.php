<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AgendaController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware(['auth-agen','auth-admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Agenda All');
        return view('data-entry.agenda.index')->with([
            'page' => $this->page,
            'agendas' => Agenda::with('paket')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Agenda Create');
        return view('data-entry.agenda.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\AgendaRequest $request)
    {
        $agenda = Agenda::create($request->all());
        if(is_null($agenda)){
            abort(500);
        }
        Session::flash('agenda-registered','Telah Ditambahkan');
        return redirect(action('AgendaController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda = Agenda::find($id);
        if(is_null($agenda)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $agenda
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
        $agenda = Agenda::find($id);
        if(is_null($agenda)){
            abort(404);
        }
        $this->page->setTitle('Agenda Edit');
        return view('data-entry.agenda.edit')->with([
            'page' => $this->page,
            'agenda' => $agenda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\AgendaRequest $request, $id)
    {
        $agenda = Agenda::find($id);
        if(is_null($agenda)){
            abort(404);
        }
        $t = $agenda->update($request->all());
        if(!$t){
            abort(500);
        }
        Session::flash('agenda-edited','Agenda teredit');
        return redirect(action('AgendaController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        if(is_null($agenda)){
            abort(404);
        }
        $t = $agenda->delete();
        if(!$t){
            abort(500);
        }
        return redirect()->back();
    }
}
