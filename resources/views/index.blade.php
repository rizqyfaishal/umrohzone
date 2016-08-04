@extends('layouts.app')


@section('content')
    <div class="intro-header">
        <div class="container">
            <div class="row extra-padd-top">
                <div class="col-lg-5 col-lg-offset-1">
                    <div class="row carousel-holder">
                        <div class="col-md-12">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="img/slider1.jpg" alt="Chania" width="460" height="345">
                                    </div>

                                    <div class="item">
                                        <img src="img/slider2.jpeg" alt="Chania" width="460" height="345">
                                    </div>

                                    <div class="item">
                                        <img src="img/slider3.jpg" alt="Flower" width="460" height="345">
                                    </div>

                                    <div class="item">
                                        <img src="img/slider4.jpg" alt="Flower" width="460" height="345">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end of carousel -->

                <!-- start form regular and private group form -->
                <div class="col-lg-5">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="pill" href="#regular">
                                <i class="fa fa-bus" ></i></a>
                            <span>Regular</span>
                        </li>
                        <li>
                            <a data-toggle="pill" href="#private"><i class="fa fa-truck"></i></a>
                            <span>Private Grup</span>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!--regular tab content-->
                        <div id="regular" class="tab-pane fade in active">
                            @include('partials._index-regular-form')
                        </div>
                        <!--end of regular tab content-->

                        <!--start private group -->
                        <div id="private" class="tab-pane fade">
                            @include('partials._index-private-group-form')
                        </div>
                        <!--end of private group-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Promo Umroh Bulan Ini!</h3>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>Swissotel Mecca
                        Hyatt Medina
                        Garuda CGK-JED</p>
                    <p>
                        <span class="price discount">$2.050</span>
                        <span class="price">$2000</span>
                    </p>
                    <p>
                        <span class="price message">Pesan s/d juli 2016</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>Swissotel Mecca
                        Hyatt Medina
                        Garuda CGK-JED</p>
                    <p>
                        <span class="price discount">$2.050</span>
                        <span class="price">$2000</span>
                    </p>
                    <p>
                        <span class="price message">Pesan s/d juli 2016</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>Swissotel Mecca
                        Hyatt Medina
                        Garuda CGK-JED</p>
                    <p>
                        <span class="price discount">$2.050</span>
                        <span class="price">$2000</span>
                    </p>
                    <p>
                        <span class="price message">Pesan s/d juli 2016</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>Swissotel Mecca
                        Hyatt Medina
                        Garuda CGK-JED</p>
                    <p>
                        <span class="price discount">$2.050</span>
                        <span class="price">$2000</span>
                    </p>
                    <p>
                        <span class="price message">Pesan s/d juli 2016</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="values-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Kami antar Anda ke tanah suci, dengan 3 kemudahan :</h3>
                </div>
            </div>
            <div class="row text-center values-section-show">
                <div class="col-lg-2 col-lg-offset-1">
                    <div class="value-box">
                        <div class="val-icon">
                            <i class="fa fa-archive"></i>
                        </div>
                        <h4>Pilih Paket Murah</h4>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-arrow">
                        <div class="val-icon">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h4>Pilih Paket Murah</h4>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-arrow">
                        <div class="val-icon">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon">
                            <i class="fa fa-archive"></i>
                        </div>
                        <h4>Pilih Paket Murah</h4>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="chart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Kapan harga paket Umroh termurah ?</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="values-section customer">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-7  col-lg-offset-1 text-right">
                    <h4 class="section-heading">Anda mau paket CUSTOMISE ? atau info PROMO ? Call <span class="phone">0800-1453-000</span> atau tulis</h4>
                </div>
                <div class="col-lg-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nomor HP atau Email">
                              <span class="input-group-btn">
                                <button class="btn btn-orange" type="button">Go!</button>
                              </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class="chart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Umrohzone adalah</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <div class="value-box">
                        <div class="val-icon green">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h4 class="text-center">Fast & Simple</h4>
                        <p class="text-center">Umrohzone.com menghimpun
                            ratusan paket dari
                            travel agen diseluruh
                            Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon green">
                            <i class="fa fa-tags"></i>
                        </div>
                        <h4 class="text-center">Cheaper</h4>
                        <p class="text-center">Kami jamin Anda
                            mendapat harga terbaik
                            karena seluruh paket berasal
                            dari pusat travel agen</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon green">
                            <i class="fa fa-check-square"></i>
                        </div>
                        <h4 class="text-center">Trusted
                           </h4>
                        <p class="text-center"> Umrohzone.com telah
                            dilengkapi dengan
                            keamanan data (SSL)
                            tingkat tinggi</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon green">
                            <i class="fa fa-money"></i>
                        </div>
                        <h4 class="text-center">No Hidden Cost</h4>
                        <p class="text-center">
                            Seluruh harga adalah final,
                            selesai didepan dan telah
                            mencakup kebutuhan pokok
                            Anda selama umroh
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="value-box">
                        <div class="val-icon green">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4 class="text-center">24 / 7</h4>
                        <p class="text-center">
                            Kami layani Anda
                            setiap hari
                            tanpa tutup
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section testimoni">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="user-icon">
                        <img src="{{ URL::asset('img/user.png') }}" alt="Testimoni User">
                    </div>
                    <p>Program Kemenag
                        5-Pasti Umrah
                        adalah hanya sebagian
                        layanan Umrohzone.com</p>
                    <h6>Prof. Dr. Tokoh Agama</h6>
                </div>
                <div class="col-lg-4">
                    <div class="user-icon">
                        <img src="{{ URL::asset('img/user.png') }}" alt="Testimoni User">
                    </div>
                    <p>Berkat cucu saya,
                        semua urusan umroh
                        jadi mudah.
                        Memang hebat dia... </p>
                    <h6>Bu Tani Tawangmanu</h6>
                </div>
                <div class="col-lg-4">
                    <div class="user-icon">
                        <img src="{{ URL::asset('img/user.png') }}" alt="Testimoni User">
                    </div>
                    <p>Futuristic is
                        when the system
                        drive the poeple</p>
                    <h6>Ir. Pakar Konmuter</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6">
                    <h2 class="green">Hubungi Kami : </h2>
                </div>
                <div class="col-lg-4">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/umrohzone" class="btn btn-orange btn-lg">
                                <i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="http://www.fb.com/umrohzone" class="btn btn-orange btn-lg">
                                <i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-orange btn-lg"><i class="fa fa-instagram fa-fw">
                                </i> <span class="network-name">Instagram</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection