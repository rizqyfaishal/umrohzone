<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Terminal;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class TerminalController extends Controller
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
        $this->page->setTitle('Terminal All');
        return view('data-entry.terminal.index')->with([
            'page' => $this->page,
            'terminals' => Terminal::paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Terminal Create');
        return view('data-entry.terminal.create')->with([
            'page' => $this->page,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\TerminalRequest $request)
    {
        $terminal = Terminal::create($request->all());
        if(is_null($terminal)){
            abort(500);
        }
        Session::flash('terminal-registered','Terminal ditambahkan');
        return redirect(action('TerminalController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $terminal = Terminal::where('id','=',$id)->first();
        return response()->json([
            'status' => 'ok',
            'data' => $terminal
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
        $terminal = Terminal::where('id','=',$id)->first();
        $this->page->setTitle($terminal->nama.' - edit');
        return view('data-entry.terminal.edit')->with([
            'page' => $this->page,
            'terminal' => $terminal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\TerminalRequest $request, $id)
    {
        $terminal = Terminal::where('id','=',$id)->first();
        if(is_null($terminal)){
            abort(404);
        }
        $terminal->update($request->all());
        Session::flash('terminal-edited','Terminal telah diedit');
        return redirect(action('TerminalController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terminal = Terminal::where('id','=',$id)->first();
        if(is_null($terminal)){
            abort(404);
        }
        $bool = $terminal->delete();
        if(!$bool){
            abort(500);
        }
        Session::flash('terminal-deleted','Terminal Deleted');
        return redirect()->back();
    }
}
