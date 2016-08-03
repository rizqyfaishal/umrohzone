@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')

@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Create Data Entry Bandara</h1>
        </div>
    </div>
    @include('data-entry.bandara.partials._bandara-create-form')
@endsection