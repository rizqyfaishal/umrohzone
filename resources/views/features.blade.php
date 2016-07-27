@extends('layouts.app')

@section('content')
    <div class="progress-bar-container">
        <div class="container">
            <div class="progress progress-bar-striped progress-bar-custom">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                </div>
            </div>
            <h4 class="text-center">Anda sedang menuju Masjidil Haram</h4>
        </div>
    </div>
    <div class="package-jamaah-container">
        <div class="container">
            <div class="tabs-choice-package">
                <div >
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                Ekonomis <br>
                                <span class="package-price">$ 2.250</span><br/>
                                <span class="package-detail">Paket 9 hari &nbsp; | &nbsp; Start Jakarta &nbsp; | &nbsp; Hotel 3/3</span>
                            <span class="package-logo">
                                <i class="fa fa-money"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                Eklusif <br>
                                <span class="package-price">$ 4.290</span><br/>
                                <span class="package-detail">Paket 9 hari &nbsp; | &nbsp; Start Jakarta &nbsp; | &nbsp; Hotel 3/3</span>
                            <span class="package-logo">
                                <i class="fa fa-car"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                Smart Value <br>
                                <span class="package-price">$ 3.150</span><br/>
                                <span class="package-detail">Paket 9 hari &nbsp; | &nbsp; Start Jakarta &nbsp; | &nbsp; Hotel 3/3</span>
                            <span class="package-logo">
                                <i class="fa fa-trophy"></i>
                            </span>
                            </a>
                        </li>
                        <ul class="feature-function">
                            <li><a href="" class="btn btn-sm"><i class="fa fa-search-plus">&nbsp;</i>Ganti Pencarian</a></li>
                            <li><a href="" class="btn btn-sm"><i class="fa fa-pie-chart">&nbsp;</i>Grafik Pencarian</a></li>
                            <li><a href="" class="btn btn-sm"><i class="fa fa-pie-chart">&nbsp;</i>Pilih Mata Uang</a></li>
                        </ul>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="tabs-package-content">
                                <table class="package-choice-table table table-hover">
                                    <thead>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Durasi</td>
                                        <td>Embarkasi</td>
                                        <td>Airlines</td>
                                        <td>Mekah</td>
                                        <td>Madinah</td>
                                        <td>Rating</td>
                                        <td>Kuota</td>
                                        <td>Harga</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-calendar"></i>
                                            </span><br/>
                                            22 Desember 2016
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-clock-o"></i>
                                            </span><br/>
                                            11 Hari
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </span><br/>
                                            Jakarta
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-plane"></i>
                                            </span><br/>
                                            Garuda Indonesia
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-hospital-o"></i>
                                            </span><br/>
                                            <span class="package-choice-table-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-hospital-o"></i>
                                            </span><br/>
                                            <span class="package-choice-table-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </td>
                                        <td>
                                            Bronze <br/>
                                            <span class="package-choice-table-rating-category text-center">
                                                6/10
                                            </span><br/>
                                            <span class="package-choice-table-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="package-choice-table-icon">
                                                <i class="fa fa-users"></i>
                                            </span><br/>
                                            Sisa 10 Orang
                                        </td>
                                        <td class="price-section">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1">
                                                    <a href="#">Pin <i class="fa fa-pinterest-square">&nbsp;</i></a>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5">
                                                    <a href="#" data-toggle="modal" data-target="#information-1-modal">Info <i class="fa fa-info-circle">&nbsp;</i></a>
                                                </div>
                                                @include('partials._features-info-modal')
                                            </div>
                                            <span class="package-price">$ 2.250</span><br/>
                                            <button class="btn btn-orange" role="button">Pilih Sekarang!</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">...</div>
                        <div role="tabpanel" class="tab-pane" id="messages">...</div>
                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection