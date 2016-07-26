@extends('template.user-template')

@section('content')
    <div class="container">
        <p>Pembayaran harus dilakukan dalam waktu 1x24 jam</p>
    </div>
    <form action="/payment/method" method="post">
        <p>Silakan pilih ke bank mana</p>
        <div class="input-group">
            <input type="radio" name="bank" value="bni"> BNI <br>
            <input type="radio" name="bank" value="bri"> BRI <br>
            <input type="radio" name="bank" value="mandiri"> Mandiri <br>
            <input type="radio" name="bank" value="bca"> BCA <br>
        </div>
        <input type='hidden' name="_token" value={!! csrf_token() !!}>

        <button type="submit">Selanjutnya</button>
    </form>
@endsection

@section('additional-script')
@endsection