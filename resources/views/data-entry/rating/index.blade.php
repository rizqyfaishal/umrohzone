@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Data Rating All</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table-hover table data-entry-table table-custom">
                    <thead>
                    <tr>
                        <td>No</td>
                        <td>Jenis Rating</td>
                        <td>Nilai</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ratings as $rating)
                        <tr>
                            <td>{{ $rating->id }}</td>
                            <td>{{ $rating->getRatingTypeFor() }}</td>
                            <td>{{ $rating->rating_value }}</td>
                            <td>
                                {!! Form::model($rating,['method' => 'DELETE','action' => ['RatingController@destroy',$rating->id]]) !!}
                                <a href="{{ action(($rating->getRatingTypeFor().'Controller@edit'),$rating->rating_id) }}" class="btn btn-orange">
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
                    {!! $ratings->render()  !!}
                </div>
            </div>
        </div>
    </div>
@endsection