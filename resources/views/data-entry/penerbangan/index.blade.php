@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('penerbangan-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('penerbangan-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('penerbangan-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('penerbangan-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Penerbangan All</h1>
                <a class="btn btn-orange" href="{{ action('PenerbanganController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Tanggal Berangkat</td>
                        <td>Waktu Tempuh</td>
                        <td>Bandara Berangkat</td>
                        <td>Bandara Pulang</td>
                        <td>Pesawat Berangkat</td>
                        <td>Pesawat Pulang</td>
                        <td>Terminal Berangkat</td>
                        <td>Terminal Pulang</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($penerbangans as $penerbangan)
                        <tr>
                            <td>{{ $penerbangan->nama }}</td>
                            <td>{{ $penerbangan->provinsi->name }}</td>
                            <td>{{ $penerbangan->kota->name }}</td>
                            <td>
                                {!! Form::model($penerbangan,['method' => 'DELETE','action' => ['PenerbanganController@destroy',$penerbangan->id]]) !!}
                                <a href="{{ action('PenerbanganController@edit',$penerbangan->id) }}" class="btn btn-orange">
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
                    {!! $penerbangans->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection