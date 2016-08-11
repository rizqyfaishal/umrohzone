@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')

@section('dashboard-content')
    @include('data-entry.pesawat.partials._pesawat-create-form')
@endsection