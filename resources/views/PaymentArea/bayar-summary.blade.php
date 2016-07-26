@extends('template.user-template')

@section('content')
    <div class="container">
        <p>Rangkuman transaksi anda :</p>

        <div id="user_bank"></div>
        <div id="user_rek"></div>
        <div id="tujuan"></div>
        <div id="tota"></div>
    </div>
    <form action="/payment/summary" method="post">

        <input type='hidden' name="_token" value={!! csrf_token() !!}>

        <button type="submit">Finalisasi</button>
    </form>
@endsection

@section('additional-script')
@endsection