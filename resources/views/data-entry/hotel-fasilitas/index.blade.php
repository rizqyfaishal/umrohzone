@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
            @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-deleted'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-deleted') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data hotel-fasilitas All</h1>
                <a class="btn btn-orange" href="{{ action('HotelFasilitasController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama hotel-fasilitas</td>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hotelFasilitass as $hotelFasilitas)
                        <tr>
                            <td>{{ $hotelFasilitas->name }}</td>
                            <td>{{ $hotelFasilitas->category->name }}</td>
                            </td>
                            <td>
                                {!! Form::model($hotelFasilitas,['method' => 'DELETE','action' => ['HotelFasilitasController@destroy',$hotelFasilitas->id]]) !!}
                                <a href="{{ action('HotelFasilitasController@edit',$hotelFasilitas->id) }}" class="btn btn-orange">
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
