<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
