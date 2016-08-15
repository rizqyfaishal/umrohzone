@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('agen-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('agen-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('agen-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('agen-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data agen All</h1>
                <a class="btn btn-orange" href="{{ action('AgenController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama agen</td>
                        <td>Deskripsi</td>
                        <td>Review</td>
                        <td>Fasilitas Agen</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agens as $agen)
                        <tr>
                            <td>{{ $agen->nama }}</td>
                            <td style="width: 30%">{{ $agen->deskripsi }}</td>
                            <td style="width: 30%"> {{ $agen->review }}</td>
                            <td style="width: 30%">
                                <ul>
                                    @foreach($agen->fasilitas as $fasilitas)
                                        <li>{{ $fasilitas->name }}</li>
                                        <ul>
                                            @foreach($fasilitas->details as $detail)
                                                <li>{{ $detail->name }}</li>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                {!! Form::model($agen,['method' => 'DELETE','action' => ['AgenController@destroy',$agen->id]]) !!}
                                <a href="{{ action('AgenController@edit',$agen->id) }}" class="btn btn-orange">
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