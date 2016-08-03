@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-content">
                    @yield('dashboard-content')
                </div>
            </div>
        </div>
    </div>
@endsection