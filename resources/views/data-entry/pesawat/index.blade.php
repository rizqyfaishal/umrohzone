@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('pesawat-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('pesawat-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('pesawat-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('pesawat-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
            @if(\Illuminate\Support\Facades\Session::has('pesawat-deleted'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ \Illuminate\Support\Facades\Session::get('pesawat-deleted') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Pesawat All</h1>
                <a class="btn btn-orange" href="{{ action('PesawatController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        {{--<td>Logo</td>--}}
                        <td>Nama Pesawat</td>
                        <td>Jenis</td>
                        <td>Kelas</td>
                        <td>Makanan</td>
                        <td>Hiburan</td>
                        <td>Penghargaan</td>
                        {{--<td>Rating</td>--}}
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pesawats as $pesawat)
                        <tr>
{{--                            <td>{{ $pesawat->logo->first()->hashcode }}</td>--}}
                            <td>{{ $pesawat->nama }}</td>
                            <td>{{ $pesawat->jenis }}</td>
                            <td>{{ $pesawat->kelas }}</td>
                            <td>{{ $pesawat->makanan }}</td>
                            <td>{{ $pesawat->hiburan }}</td>
                            <td>{{ $pesawat->penghargaan }}</td>
{{--                            <td>{{ $pesawat->rating->rating_value }}</td>--}}
                            <td>
                                {!! Form::model($pesawat,['method' => 'DELETE','action' => ['PesawatController@destroy',$pesawat->id]]) !!}
                                <a href="{{ action('PesawatController@edit',$pesawat->id) }}" class="btn btn-orange">
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