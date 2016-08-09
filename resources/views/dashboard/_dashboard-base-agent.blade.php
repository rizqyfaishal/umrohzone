@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-agent-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-content">
                    @yield('dashboard-content')
                    <h1>Panel Kontrol Akun</h1>
                    <br>
                    <p>Halo, Travel Agent Abata</p>

                    <p>Dari Panel Kontrol Akun, Anda dapat melihat informasi akun Anda, Daftar Seluruh Pemesan, Daftar seluruh paket, dan membuat paket baru Anda.</p>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dashboard-content">
                                <h1>Informasi Akun</h1>
                                <hr>
                                <p>Nama : Travel Agent Abata</p>
                                <p>Email : abata@gmail.com</p>
                                <p>No HP : 087884187967</p>
                                <p>Direktur : Bapak Anto</p>

                                <!-- Ubah ini menuju ke menu Informasi akun -->
                                <div class="text-right"><a href="#">ubah</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dashboard-content">
                            <h1>Daftar Seluruh Paket</h1>
                            <hr>
                            <div class="panel panel-default">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Booking No.</th>
                                        <th>Package</th>
                                        <th>Visa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">P01324</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P01523</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P01692</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- More ini akan menuju menu sidebar "Daftar Seluruh Paket" -->
                            <div class="text-right"><a href="#">more..</a></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#">
                            <div class="well"><h4 class="text-center">Buat Paket Baru</h4></div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dashboard-content">
                            <h1>Daftar Seluruh Pemesan</h1>
                            <hr>
                            <div class="panel panel-default">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Booking No.</th>
                                        <th>Package</th>
                                        <th>Visa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">P01324</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P01523</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P01692</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- More ini akan menuju menu sidebar "Booking Summary" -->
                            <div class="text-right"><a href="#">more..</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection