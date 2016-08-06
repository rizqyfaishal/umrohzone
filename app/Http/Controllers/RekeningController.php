<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Helper\PageDescription;
use App\Rekening;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class RekeningController extends Controller
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
        $this->page->setTitle('Rekening Create');
        return view('data-entry.rekening.index')->with([
            'page' => $this->page,
            'rekenings' => Rekening::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Rekening Create');
        return view('data-entry.rekening.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\RekeningRequest $request)
    {
        $rekening = Auth::user()->rekening()->save(Rekening::create($request->all()));
        if(is_null($rekening)){
            abort(500);
        }
        Session::flash('rekening-registered','Telah ditambahkan');
        return redirect(action('RekeningController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rekening = Rekening::find($id);
        if(is_null($rekening)){
            abort(404);
        }

        return response()->json([
            'status' => 'ok',
            'data' => $rekening
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekening = Rekening::find($id);
        if(is_null($rekening)){
            abort(404);
        }
        $this->page->setTitle('Rekening Edit');
        return view('data-entry.rekening.edit')->with([
            'page' => $this->page,
            'rekening' => $rekening
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\RekeningRequest $request, $id)
    {
        $rekening = Rekening::find($id);
        if(is_null($rekening)){
            abort(404);
        }
        if(!$rekening->update($request->all())){
            abort(500);
        }
        Session::flash('rekening-edited','Edited!');
        return redirect(action('RekeningController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekening = Rekening::find($id);
        if(is_null($rekening)){
            abort(404);
        }
        if(!$rekening->delete()){
            abort(500);
        }
        return redirect()->back();
    }

    public function begintransaction(Request $request)
    {
        $request->session()->forget(Auth::user()->id);
        return view('PaymentArea.bayar-user');
    }

    public function inputrek(Request $request)
    {
        $request->session()->forget(Auth::user()->id);
        $request->session()->push(Auth::user()->id, Input::get('bank'));
        $request->session()->push(Auth::user()->id, Input::get('no_rek'));
        return redirect('/payment/method');
    }

    public function inputmethod(Request $request)
    {
        $request->session()->push(Auth::user()->id, Input::get('bank'));
        return redirect('/payment/summary');
    }

    public function summary(Request $request)
    {
        $transaction = $request->session()->get(Auth::user()->id);
        return view('PaymentArea.bayar-summary', ['transaction' => $transaction]);
    }

    public function finalize(Request $request)
    {
        $transaction = $request->session()->get(Auth::user()->id);
        $user = User::where('id', '=', Auth::user()->id)->first();
        $user->bank = $transaction[0];
        $user->no_rek = $transaction[1];
        $user->save();

        $booking = Booking::where('id_user', '=', Auth::user()->id)->first()
            ->update(['status_payment' => 1]);
        return redirect('/booking/' . Auth::user()->id);
    }
}
