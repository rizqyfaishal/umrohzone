@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('paket-category-registered'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-category-registered') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('paket-category-edited'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-category-edited') }}</p>
                    </div>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('paket-category-deleted'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ \Illuminate\Support\Facades\Session::get('paket-category-deleted') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1>Data paket-category All</h1>
                <a class="btn btn-orange" href="{{ action('PaketCategoryController@create') }}"><i class="fa fa-pencil-square">&nbsp;</i>Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="dataTables" class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>Nama paket-category</td>
                        <td>Base Price</td>
                        <td>List Paket</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paketCategories as $paketCategory)
                        <tr>
                            <td>{{ $paketCategory->name }}</td>
                            <td>{{ $paketCategory->base_price }}</td>
                            <td>
                                <ul>
                                    @foreach($paketCategory->pakets as $paket)
                                        <li>{{ $paket->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            </td>
                            <td>
                                {!! Form::model($paketCategory,['method' => 'DELETE','action' => ['PaketCategoryController@destroy',$paketCategory->id]]) !!}
                                <a href="{{ action('PaketCategoryController@edit',$paketCategory->id) }}" class="btn btn-orange">
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
