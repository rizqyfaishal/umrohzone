@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="container">
        <div class="col-md-6 form-group">
            {{Form::open(array('action' => 'AdminController@chooseAgent'))}}
            Pilih Agen :
            <select class="form-control" name="agen">
                @foreach($agens as $agen)
                    <option value="{{$agen->id}}">{{$agen->nama_agen}}</option>
                @endforeach
            </select>
            {{Form::submit('Lanjutkan', array('class' => 'btn btn-default'))}}
            {{Form::close()}}
        </div>
    </div>
@endsection