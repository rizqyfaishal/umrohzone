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
                    <h1>Booking Summary</h1>
                    <br>
                    <div class="panel panel-default">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Book No.</th>
                                <th>Package</th>
                                <th>Travel Agent</th>
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
                                <td>Magna</td>
                                <td>09Sept2016</td>
                                <td>4</td>
                                <td>2000$</td>
                                <td>JNE Airwaybill Pk1035984232546</td>
                                <td>Waiting</td>
                                <td><a href="#" class="btn btn-warning">PDF</a></td>
                            </tr>
                            <tr>
                                <th scope="row">P01523</th>
                                <td>Arafah 9 Days</td>
                                <td>AeroHajj</td>
                                <td>09Oct2015</td>
                                <td>4</td>
                                <td>2200$</td>
                                <td>POS Airwaybill Pk432546</td>
                                <td>Landed</td>
                                <td><a href="#" class="btn btn-warning">PDF</a></td>
                            </tr>
                            <tr>
                                <th scope="row">P01312</th>
                                <td>Shoufa 15 Days</td>
                                <td>Magna</td>
                                <td>09Sept2016</td>
                                <td>4</td>
                                <td>2000$</td>
                                <td>JNE Airwaybill Pk1035984232546</td>
                                <td>waiting</td>
                                <td><a href="#" class="btn btn-warning">PDF</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

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
                <br>


            </div>
        </div>
    </div>
@endsection