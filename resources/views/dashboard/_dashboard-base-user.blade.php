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
                    <h1>Panel Kontrol Akun</h1>
                    <br>
                    <p>Halo, Luthfi Abdurrahim</p>

                    <p>Dari Panel Kontrol Akun, Anda dapat melihat informasi akun biodata Anda, Booking Summary, Data Calon Jamaah.</p>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dashboard-content">
                            <h1>Informasi Akun</h1>
                            <br>
                            <p>Nama : Luthfi Abdurrahim</p>
                            <p>Email : luthviar.a@gmail.com</p>
                            <p>No HP : 087884187967</p>

                            <!-- Ubah ini menuju ke menu Informasi akun -->
                            <div class="text-right"><a href="{{ action('PageController@dashboardUserInfoAkun') }}">ubah</a></div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dashboard-content">
                            <h1>Booking Summary</h1>
                            <br>
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
                            <div class="text-right"><a href="{{ action('PageController@dashboardUserBooking') }}">more..</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection