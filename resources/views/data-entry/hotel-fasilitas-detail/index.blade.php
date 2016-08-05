@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-detail-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-detail-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-detail-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-detail-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('hotel-fasilitas-detail-deleted'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-fasilitas-detail-deleted') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data hotel-fasilitas-detail All</h1>
                <a class="btn btn-orange" href="{{ action('HotelFasilitasDetailController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama hotel-fasilitas detail</td>
                        <td>Nama Hotel</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hotelFasilitasDetails as $hotelFasilitasDetail)
                        <tr>
                            <td>{{ $hotelFasilitasDetail->name }}</td>
                            <td style="width: 30%">{{ $hotelFasilitasDetail->hotelFasilitas->hotel->nama }}</td>
                            <td>
                                {!! Form::model($hotelFasilitasDetail,['method' => 'DELETE','action' => ['HotelFasilitasDetailController@destroy',$hotelFasilitasDetail->id]]) !!}
                                <a href="{{ action('HotelFasilitasDetailController@edit',$hotelFasilitasDetail->id) }}" class="btn btn-orange">
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
                    {!! $hotelFasilitasDetails->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection