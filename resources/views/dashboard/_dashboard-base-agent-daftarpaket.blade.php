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

                        <h1>Daftar Seluruh Paket</h1>
                        <hr>
                        <div class="panel panel-default">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Durasi</th>
                                    <th>Embarkasi</th>
                                    <th>Airlines</th>
                                    <th>Hotel Mekah</th>
                                    <th>Hotel Madinah</th>
                                    <th>Rating</th>
                                    <th>Pax tersisa</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>20-Des-2016</td>
                                    <td>11</td>
                                    <td>Jakarta</td>
                                    <td>GA</td>
                                    <td>Elaf Kinda</td>
                                    <td>Elaf Taibah</td>
                                    <td>-</td>
                                    <td>10</td>
                                    <td>2250</td>

                                    {{--edit ini mirip : http://localhost:8000/paket/create--}}
                                    <td><a href="{{ action('PageController@dashboardAgentEditPaket') }}">edit</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>25-Des-2016</td>
                                    <td>9</td>
                                    <td>Jakarta</td>
                                    <td>GA</td>
                                    <td>Pullman Zamzam</td>
                                    <td>Movenpick</td>
                                    <td>-</td>
                                    <td>10</td>
                                    <td>2500</td>

                                    {{--edit ini mirip : http://localhost:8000/paket/create--}}
                                    <td><a href="{{ action('PageController@dashboardAgentEditPaket') }}">edit</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        {{--kalau ada banyak, pake ini, tampilin per halaman maksimal 20, bisa view all juga--}}
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
                <br>
                <br>

            </div>
        </div>
    </div>
@endsection