@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('hotel-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('hotel-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('hotel-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data hotel All</h1>
                <a class="btn btn-orange" href="{{ action('HotelController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama hotel</td>
                        <td>Deskripsi</td>
                        <td>Review</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->nama }}</td>
                            <td style="width: 30%">{{ $hotel->deskripsi }}</td>
                            <td style="width: 30%"> {{ $hotel->review }}</td>
                            <td>
                                {!! Form::model($hotel,['method' => 'DELETE','action' => ['HotelController@destroy',$hotel->id]]) !!}
                                <a href="{{ action('HotelController@edit',$hotel->id) }}" class="btn btn-orange">
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
                    {!! $hotels->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection