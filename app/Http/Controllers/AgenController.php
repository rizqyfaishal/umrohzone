<?php

namespace App\Http\Controllers;

use App\Address;
use App\Agen;
use App\Helper\AttachmentHelper;
use App\Helper\PageDescription;
use App\Helper\RegistersUsers;
use App\Rekening;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AgenController extends Controller
{

    use RegistersUsers;
    use AttachmentHelper;

    public function __construct(PageDescription $page)
    {
        $this->page = $page;
    }

    protected $registerView = 'agen.register';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Agen All');
        return view('data-entry.agen.index')->with([
            'page' => $this->page,
            'agens' => Agen::with('alamat','rating','provinsi','regency','rekening')->get()
        ]);
    }




    public function store(Requests\AgentRegisterRequest $request)
    {
        $user = $this->register($request);
        $agen = Agen::create($request->all());
        if(is_null($agen)){
            abort(500);
        }
        $t = $agen->user()->save($user);
        if(!$t){
            abort(500);
        }
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $attach = $this->saveFile($file,4);
            $agen->attachments()->save($attach);
        }
        $agen->alamat()->save(Address::create($request->all()));
        $agen->rekening()->save(Rekening::create($request->all()));
        $agen->generateNoAgen();
        return response()->json($user);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agen = Agen::fins($id);
        if(is_null($agen)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $agen
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
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showRegister(){
        $this->page->setTitle('Register');
        return $this->showRegistrationForm($this->page);
    }
}
