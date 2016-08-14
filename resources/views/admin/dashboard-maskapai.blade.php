@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="pesawat-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">pesawat Summary</h2>
                <table class="table table-hover table-custom">

                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
                        <td>Janis</td>
                        <td>Kelas</td>
                        <td>Makanan</td>
                        <td>Hiburan</td>
                        <td>Penghargaan</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pesawats as $pesawat)
                        <tr>
                            <td>{{$pesawat->nama}}</td>
                            <td>{{$pesawat->jenis}}</td>
                            <td>{{$pesawat->kelas}}</td>
                            <td>{{$pesawat->makanan}}</td>
                            <td>{{$pesawat->hiburan}}</td>
                            <td>{{$pesawat->penghargaan}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection