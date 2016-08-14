@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('terminal-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('terminal-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('terminal-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('terminal-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
            @if(\Illuminate\Support\Facades\Session::has('terminal-deleted'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('terminal-deleted') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Terminal All</h1>
                <a class="btn btn-orange" href="{{ action('TerminalController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama Terminal</td>
                        <td>Created At</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($terminals as $terminal)
                        <tr>
                            <td>{{ $terminal->nama }}</td>
                            <td>{{ $terminal->created_at }}</td>
                            <td>
                                {!! Form::model($terminal,['method' => 'DELETE','action' => ['TerminalController@destroy',$terminal->id]]) !!}
                                <a href="{{ action('TerminalController@edit',$terminal->id) }}" class="btn btn-orange">
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
                    {!! $terminals->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('partials._data-tables')