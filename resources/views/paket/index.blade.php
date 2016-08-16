@extends('layouts.angular-app')

@section('content')
    <div ng-controller="ProgressController">
        <progress-bar message="Anda sedang menuju Masjidil Haram" progress="60"></progress-bar>
    </div>
    <ui-view></ui-view>
@endsection

@section('datepicker')
    @include('partials._datepicker')
@endsection
@include('partials._fotorama')
@include('angular._script')
