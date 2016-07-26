@extends('template.user-template')

@section('content')
    <div class="container">
        <p>Rangkuman transaksi anda :</p>
        <div id="user_bank">Bank anda : {{$transaction[0]}}</div>
        <div id="user_rek">No. Rekening anda : {{$transaction[1]}}</div>
        <div id="js_tujuan">Bank tujuan : {{$transaction[2]}}</div>
        <div id="js_rek">No. Rekening tujuan :</div>

        <div id="total"></div>
    </div>
    <form action="/payment/summary" method="post">

        <input type='hidden' name="_token" value={!! csrf_token() !!}>

        <button type="submit">Finalisasi</button>
    </form>
@endsection

@section('additional-script')
@endsection