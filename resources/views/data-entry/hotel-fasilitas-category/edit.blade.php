@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')

@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Edit Data Entry Hotel Fasiltias Category</h1>
        </div>
    </div>
    @include('data-entry.hotel-fasilitas-category.partials._hotel-fasilitas-category-edit-form')
@endsection