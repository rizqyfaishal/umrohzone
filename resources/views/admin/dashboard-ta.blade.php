@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="agen-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">agen Summary</h2>
                <div class="right"><a href="/auth/travel-agen/register" class="button">[Tambah]</a></div>
                <table class="table table-hover table-custom">

                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>No. Agen</td>
                        <td>Nama Agen</td>
                        <td>Direktur</td>
                        <td>Kontak Direktur</td>
                        <td>Rating</td>
                        <td>Provinsi Id</td>
                        <td>Regency Id</td>
                        <td>Kontak Agen</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agens as $agen)
                        <tr>
                            <td>{{$agen->id}}</td>
                            <td>{{$agen->no_agen}}</td>
                            <td>{{$agen->nama_agen}}</td>
                            <td>{{$agen->direktur}}</td>
                            <td>{{$agen->phone_direktur}}</td>
                            <td>{{$agen->rating}}</td>
                            <td>{{$agen->provinsi_id}}</td>
                            <td>{{$agen->regency_id}}</td>
                            <td>{{$agen->phone2}}</td>
                            <td><a href="/agen/{{$agen->id}}/edit" class="button">[Edit]</a><a href="/agen/{{$agen->id}}/delete" class="button">[Hapus]</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection