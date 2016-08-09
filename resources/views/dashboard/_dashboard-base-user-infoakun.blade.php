@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-user-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-content">
                    @yield('dashboard-content')
                    <h1>Informasi Akun</h1>
                    <br>
                    <p>Nama : Luthfi Abdurrahim</p>
                    <p>Email : luthviar.a@gmail.com</p>
                    <p>No HP : 087884187967</p>
                    <p>Alamat : Jalan Teratai Putih 1 gang 3 nomor 131 RT 04/RW 04 Perumnas Klender</p>

                    <!-- Ubah ini menuju ke menu Informasi akun -->
                    <div class="text-right"><a href="#">ubah</a></div>
                <br>
            </div>
        </div>
    </div>
@endsection