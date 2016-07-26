@extends('template.user-template')

@section('content')
    <p>Isi data dibawah</p>
    <form action="/auth/register" method="post">
        <div class="form-group">
            <label for="nama"> Nama :</label> <input type="text" name='nama' placeholder="nama">
            @if ($errors->has('nama'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="no_hp"> No. Hp :</label> <input type="text" name='no_hp' placeholder="nomor hp">
            @if ($errors->has('no_hp'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('no_hp') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="email"> Email :</label> <input type="email" name='email' placeholder="email">
            @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="alamat"> Alamat :</label> <input type="text" name='alamat' placeholder="alamat">
            @if ($errors->has('alamat'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="password"> Password :</label> <input type="password" name='password' placeholder="password">
            @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="password2"> Ulangi Password :</label> <input type="password" name='password_confirmation' placeholder="tulis ulang password">
            @if ($errors->has('passwrod2'))
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $errors->first('password2') }}
                </div>
            @endif
        </div>
        <input type='hidden' name="_token" value={!! csrf_token() !!}>
        <input type="checkbox"> Menyetujui EULA
        <button type="submit">Sign up</button>
    </form>
@endsection

@section('additional-script')
@endsection