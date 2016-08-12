@extends('layouts.angular-app')

@section('content')
    <div ng-controller="ProgressController">
        <progress-bar message="Anda sedang menuju Masjidil Haram" progress="60"></progress-bar>
    </div>
    <ui-view></ui-view>
@endsection

@include('angular._script')
