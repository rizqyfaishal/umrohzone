@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="login-form">
                    @include('partials._login-form')
                </div>
            </div>
        </div>
    </div>
@endsection