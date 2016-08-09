@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('paket-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('paket-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('paket-deleted'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-deleted') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data paket All</h1>
                <a class="btn btn-orange" href="{{ action('PaketController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Category</td>
                        <td>Waktu</td>
                        <td>Harga</td>
                        <td>Durasi</td>
                        <td>Hotel Mekah</td>
                        <td>Hotel Madinah</td>
                        <td>Kuota</td>
                        <td>Discount</td>
                        <td>Pesawat</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pakets as $paket)
                        <tr>
                            <td>{{ $paket->paketCategory->name }}</td>
                            <td>{{ $paket->waktu }}</td>
                            <td>{{ $paket->harga }}</td>
                            <td>{{ $paket->durasi }}</td>
                            <td>{{ $paket->hotelMekah->nama }}</td>
                            <td>{{ $paket->hotelMadinah->nama }}</td>
                            <td>{{ $paket->kuota }}</td>
                            <td>{{ $paket->discount }}</td>
                            <td>{{ $paket->pesawat->nama }}</td>
                            <td>
                                {!! Form::model($paket,['method' => 'DELETE','action' => ['PaketController@destroy',$paket->id]]) !!}
                                <a href="{{ action('PaketController@edit',$paket->id) }}" class="btn btn-orange">
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
@endsection
@include('partials._data-tables')
