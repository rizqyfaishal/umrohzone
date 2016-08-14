@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="hotel-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">hotel Summary</h2>
                <table class="table table-hover table-custom">

                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama Hotel</td>
                        <td>Lokasi</td>
                        <td>Deskripsi</td>
                        <td>Review</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hotels as $hotel)
                        <tr>
                            <td>{{$hotel->id}}</td>
                            <td>{{$hotel->nama}}</td>
                            <td>{{$hotel->hotel_primary_lokasi}}</td>
                            <td>{{$hotel->deskripsi}}</td>
                            <td>{{$hotel->review}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection