@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-agent-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-content">
                    @yield('dashboard-content')
                    <h1>Edit Paket</h1>
                    <br>
                    {!! Form::model($paket = new \App\Paket(),['METHOD' => 'POST', 'action' => ['PaketController@store']]) !!}
                    @include('data-entry.paket.partials._paket-form')
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <br>
                                <input type="submit" value="Submit" class="btn btn-custom"/>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
                <br>


            </div>
        </div>
    </div>
@endsection