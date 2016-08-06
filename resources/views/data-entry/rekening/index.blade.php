@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('rekening-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('rekening-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('rekening-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('rekening-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('rekening-deleted'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('rekening-deleted') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data rekening All</h1>
                <a class="btn btn-orange" href="{{ action('RekeningController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Owner</td>
                        <td>Nama Bank</td>
                        <td>No Rekening</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rekenings as $rekening)
                        <tr>
                            <td>{{ $rekening->owner->user->name }}</td>
                            <td>{{ $rekening->bank }}</td>
                            <td>{{ $rekening->no_rekening }}</td>
                            </td>
                            <td>
                                {!! Form::model($rekening,['method' => 'DELETE','action' => ['RekeningController@destroy',$rekening->id]]) !!}
                                <a href="{{ action('RekeningController@edit',$rekening->id) }}" class="btn btn-orange">
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
