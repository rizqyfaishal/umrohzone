@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-agent-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="dashboard">
                    @yield('dashboard-content')
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
                                            <th>Nama Jamaah</th>
                                            <th>No. HP Jamaah</th>
                                            <th>Departure Date</th>
                                            <th>Pax</th>
                                            <th>DP</th>
                                            <th>Submit Docs</th>
                                            <th>Visa</th>
                                            <th>File</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">P01324</th>
                                            <td>Multazam 9 Days</td>
                                            <td>Luthfi Abdurrahim</td>
                                            <td>087884187967</td>
                                            <td>09Sept2016</td>
                                            <td>4</td>
                                            <td>2000$</td>
                                            <td>JNE Airwaybill Pk1035984232546</td>
                                            <td>waiting</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">P01324</th>
                                            <td>Multazam 9 Days</td>
                                            <td>Luthfi Abdurrahim</td>
                                            <td>087884187967</td>
                                            <td>09Sept2016</td>
                                            <td>4</td>
                                            <td>2000$</td>
                                            <td>JNE Airwaybill Pk1035984232546</td>
                                            <td>waiting</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">P01324</th>
                                            <td>Multazam 9 Days</td>
                                            <td>Luthfi Abdurrahim</td>
                                            <td>087884187967</td>
                                            <td>09Sept2016</td>
                                            <td>4</td>
                                            <td>2000$</td>
                                            <td>JNE Airwaybill Pk1035984232546</td>
                                            <td>waiting</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                {{--pagination, maksimal ada 20, trus bisa juga diatur maksimal ada berapa atau view all langsung--}}
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <br>


            </div>
        </div>
    </div>
@endsection