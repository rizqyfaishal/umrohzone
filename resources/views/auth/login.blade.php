@extends('template.user-template')

@section('content')
    <div class="">
        <form action="/login" method="post">
            <div class="input-group">
                <label for="email">Email : </label> <input name="email" type="email">
            </div>
            <div class="input-group">
                <label for="password">Password : </label> <input name="password" type="password">
            </div>
            <input type='hidden' name="_token" value={!! csrf_token() !!}>
            <button type="submit">Login</button>
        </form>
    </div>
    <a href="/auth/register">Register</a>
@endsection

@section('additional-script')
@endsection