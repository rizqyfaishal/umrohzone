<?php

namespace App\Http\Controllers;

use App\Agen;
use App\Helper\PageDescription;
use App\Helper\RegistersUsers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AgenController extends Controller
{

    use RegistersUsers;

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
        //
    }




    public function store(Requests\AgentRegisterRequest $request)
    {
        $user = $this->register($request);
        $agen = Agen::create($request->all());
        $agen->user()->save($user);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
