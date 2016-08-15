@extends('layouts.angular-app')

@section('hash_id_paket')
    <meta id="id" name="hash" content="{{ $hash_id_paket }}"/>
@endsection
@section('content')
    <div ng-controller="ProgressController">
        <progress-bar message="Anda sedang menuju Masjidil Haram" progress="90"></progress-bar>
    </div>
    <ui-view></ui-view>
@endsection
@include('angular._data-jamaah')
