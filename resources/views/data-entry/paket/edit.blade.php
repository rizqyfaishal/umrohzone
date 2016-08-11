@extends('dashboard._dashboard-base')
@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Edit Data Entry Paket</h1>
        </div>
    </div>
    @include('data-entry.paket.partials._paket-edit-form')
@endsection