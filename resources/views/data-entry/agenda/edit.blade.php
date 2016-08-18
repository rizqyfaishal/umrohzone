@extends('dashboard._dashboard-base')
@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Edit Data Entry Agenda</h1>
        </div>
    </div>
    @include('data-entry.agenda.partials._agenda-edit-form')
@endsection