@extends('dashboard._dashboard-base')

@include('admin.partials._dashboard-admin-side-nav')
@section('dashboard-content')
    <div class="jamaah-summary">
        <div class="container">
            <div class="row">
                <h2 class="text-center">jamaah Summary</h2>
                <div class="right"><a href="#" class="button">[Tambah]</a></div>
                <table class="table table-hover table-custom">
                    <thead>
                    <tr>
                        <td>Id Jamaah</td>
                        <td>Id Pemesan</td>
                        <td>Passport</td>
                        <td>Passport date</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Last Name</td>
                        <td>Passport Valid</td>
                        <td>KTP Valid</td>
                        <td>Mahrom</td>
                        <td>Upgrade Kamar</td>
                        <td>Upgrade Asuransi</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jamaahs as $jamaah)
                        <tr>
                            <td>{{$jamaah->id}}</td>
                            <td>{{$jamaah->pemesan_id}}</td>
                            <td>{{$jamaah->status_paspor}}</td>
                            <td>{{$jamaah->masa_berlaku_paspor}}</td>
                            <td>{{$jamaah->fname}}</td>
                            <td>{{$jamaah->mname}}</td>
                            <td>{{$jamaah->lname}}</td>
                            <td>{{$jamaah->paspor_valid}}</td>
                            <td>{{$jamaah->ktp_valid}}</td>
                            <td>{{$jamaah->mahrom}}</td>
                            <td>{{$jamaah->upgrade_kamar}}</td>
                            <td>{{$jamaah->upgrade_asuransi}}</td>
                            <!--TODO buat modal konfirmasi hapus!-->
                            <td><td><a href="/admin/jamaah/edit/{{$jamaah->id}}" class="button">[Edit]</a><a href="/admin/jamaah/hapus/{{$jamaah->id}}" class="button">[Hapus]</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection