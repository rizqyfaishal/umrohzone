@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="hotel-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">hotel Summary</h2>
                <div class="right"><a href="/hotel/create" class="button">[Tambah]</a></div>
                <table class="table table-hover table-custom">

                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama Hotel</td>
                        <td>Lokasi</td>
                        <td>Deskripsi</td>
                        <td>Review</td>
                        <td>Action</td>
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
                            <td><td><a href="/hotel/{{$hotel->id}}/edit" class="button">[Edit]</a><a href="/hotel/{{$hotel->id}}/delete" class="button">[Hapus]</a></td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection