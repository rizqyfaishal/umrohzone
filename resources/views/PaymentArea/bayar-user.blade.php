@extends('template.user-template')

@section('content')
    <form action="/payment/pay" method="post">
        <p>Silakan pilih rekening yang akan anda gunakan</p>
        <div class="input-group">
            <input type="radio" name="bank" value="bni"> BNI <br>
            <input type="radio" name="bank" value="bri"> BRI <br>
            <input type="radio" name="bank" value="mandiri"> Mandiri <br>
            <input type="radio" name="bank" value="bca"> BCA <br>
        </div>
        <label>No Rekening : </label><input type="text" name="no_rek">
        <input type='hidden' name="_token" value={!! csrf_token() !!}>

        <button type="submit">Selanjutnya</button>
    </form>
@endsection

@section('additional-script')
@endsection