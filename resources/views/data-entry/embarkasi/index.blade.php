@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('embarkasi-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('embarkasi-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
            @if(\Illuminate\Support\Facades\Session::has('embarkasi-edited'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('embarkasi-edited') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Embarkasi All</h1>
                <a class="btn btn-orange" href="{{ action('EmbarkasiController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama Embarkasi</td>
                        <td>Bandara</td>
                        <td>Provinsi</td>
                        <td>Kota</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($embarkasis as $embarkasi)
                        <tr>
                            <td>{{ $embarkasi->nama }}</td>
                            <td>{{ $embarkasi->provinsi->name }}</td>
                            <td>{{ $embarkasi->kota->name }}</td>
                            <td>{{ $embarkasi->bandara->name }}</td>
                            <td>
                                {!! Form::model($embarkasi,['method' => 'DELETE','action' => ['EmbarkasiController@destroy',$embarkasi->id]]) !!}
                                    <a href="{{ action('EmbarkasiController@edit',$embarkasi->id) }}" class="btn btn-orange">
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
                <div class="pagination-container">
                    {!! $embarkasis->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection