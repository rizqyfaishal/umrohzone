@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')

@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Edit Data Entry Hotel Fasiltias</h1>
        </div>
    </div>
    @include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-edit')
    @include('data-entry.hotel-fasilitas.partials._hotel-fasilitas-template-form')
@endsection