@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')

@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Edit Data Entry Penerbangan</h1>
        </div>
        <div class="col-lg-12">
            @if(\Illuminate\Support\Facades\Session::has('bandara-input-error'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('bandara-input-error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('terminal-input-error'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('terminal-input-error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @include('data-entry.penerbangan.partials._penerbangan-edit-form')
@endsection