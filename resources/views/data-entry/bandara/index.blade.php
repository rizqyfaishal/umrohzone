@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('bandara-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('bandara-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('bandara-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('bandara-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Bandara All</h1>
                <a class="btn btn-orange" href="{{ action('BandaraController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama Bandara</td>
                        <td>Provinsi</td>
                        <td>Kota</td>
                        <td>Kode Bandara</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bandaras as $bandara)
                        <tr>
                            <td>{{ $bandara->nama }}</td>
                            <td>{{ $bandara->provinsi->name }}</td>
                            <td>{{ $bandara->kota->name }}</td>
                            <td>{{ $bandara->kode_bandara }}</td>
                            <td>
                                {!! Form::model($bandara,['method' => 'DELETE','action' => ['BandaraController@destroy',$bandara->id]]) !!}
                                <a href="{{ action('BandaraController@edit',$bandara->id) }}" class="btn btn-orange">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </button>
                                @include('partials._action-data-entry')
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('partials._data-tables')
@endsection