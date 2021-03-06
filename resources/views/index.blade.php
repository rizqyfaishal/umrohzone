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
                                        <img src="img/slider2_ori.jpg" alt="Chania" width="460" height="345">
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
                                <i class="fa fa-bus"></i></a>
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
            </div>
            <br><br><br>
            <div class="row">
<<<<<<< HEAD

                <div class="promo-slick slider-slick">
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
                    <a href="http://www.facebook.com">
                        <div>
                            <p>
                                Swissotel Mecca
                                Hyatt Medina
                                Garuda CGK-JED
                            </p>
                            <p>
                                <span class="price discount">$2.050</span>
                                <span class="price">$2000</span>
                            </p>
                            <p>
                                <span class="price message">Pesan s/d juli 2016</span>
                            </p>


                            <!-- <img src="http://placehold.it/350x300?text=1"> -->
                        </div>
                    </a>
=======
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
>>>>>>> 30f4d9f8a6f17af89b3a9f73202aedab30621cb0
                </div>

                {{--<div class="col-sm-3">--}}
                    {{--<p>Swissotel Mecca--}}
                        {{--Hyatt Medina--}}
                        {{--Garuda CGK-JED</p>--}}
                    {{--<p>--}}
                        {{--<span class="price discount">$2.050</span>--}}
                        {{--<span class="price">$2000</span>--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--<span class="price message">Pesan s/d juli 2016</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<p>Swissotel Mecca--}}
                        {{--Hyatt Medina--}}
                        {{--Garuda CGK-JED</p>--}}
                    {{--<p>--}}
                        {{--<span class="price discount">$2.050</span>--}}
                        {{--<span class="price">$2000</span>--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--<span class="price message">Pesan s/d juli 2016</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<p>Swissotel Mecca--}}
                        {{--Hyatt Medina--}}
                        {{--Garuda CGK-JED</p>--}}
                    {{--<p>--}}
                        {{--<span class="price discount">$2.050</span>--}}
                        {{--<span class="price">$2000</span>--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--<span class="price message">Pesan s/d juli 2016</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<p>Swissotel Mecca--}}
                        {{--Hyatt Medina--}}
                        {{--Garuda CGK-JED</p>--}}
                    {{--<p>--}}
                        {{--<span class="price discount">$2.050</span>--}}
                        {{--<span class="price">$2000</span>--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--<span class="price message">Pesan s/d juli 2016</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
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
                            {{--<i class="fa fa-archive"></i>--}}
                            <img src="img/home/pilih_paket_umroh_icon.png" alt="Pilih Paket Murah">
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
                            {{--<i class="fa fa-apple"></i>--}}
                            <img src="img/home/registrasi_icon.png" alt="Registrasi">
                        </div>
                        <h4>Registrasi</h4>
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
                            <img src="img/home/payment_check_icon.png" alt="Payment">
                        </div>
                        <h4>Payment</h4>
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
                    <h3 class="text-center"> Kapan harga paket Umroh termurah ?</h3>
                    <br>

                    <div class="row">
                        <h4 class="text-left"><img src="img/home/listordericon.png"/> Indicates cheapest package in this
                            frame | Price range $2130 to 3150</h4>

                        <div class="col-sm-9"><img src="img/home/statistic_image.jpg" style="width:100%; height:100%;"/>
                        </div>
                        <div class="col-sm-3"><img src="img/home/pilih_hijau.png" style="width:100%; height:100%;"/>
                        </div>
                    </div>

                    <div class="row" ng-app="app">
                        <canvas id="myChart" width="100" height="100"></canvas>
                    </div>
                    <br><br><br>

                    <div class="row">
                        <div class="col-lg-12">
                            <iframe id="forecast_embed" type="text/html" frameborder="0" height="245"
                                    width="100%"
                                    src="http://forecast.io/embed/#lat=21.389082&lon=-39.8579123&name=Mecca"></iframe>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="values-section customer">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 text-right">
                    <h4 class="section-heading">Anda mau paket CUSTOMISE ? atau info PROMO ? Call <a
                                href="tel:0800-1453-000"><span class="phone">0800-1453-000</span></a> atau tulis</h4>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        {{Form::open(array('action'=>'PageController@index','id'=>'customise'))}}
                        <span class="input-group-btn">
                                  <input type="text" class="form-control" placeholder="Nomor HP atau Email"
                                         id="customise-contact">
                                  <button class="btn btn-orange" type="button" onclick="tempcheck()">Go!</button>
                              </span>
                        {{Form::close()}}
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class="chart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Umrohzone.com adalah</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <div class="value-box">
                        <div class="val-icon green">
                            {{--<i class="fa fa-thumbs-up"></i>--}}
                            <img src="{{ URL::asset('img/home/fast_simple_icon.png') }}" alt="Fast Simple">
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
                            {{--<i class="fa fa-tags"></i>--}}
                            <img src="{{ URL::asset('img/home/cheap_icon.png') }}" alt="Cheaper">
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
                            {{--<i class="fa fa-check-square"></i>--}}
                            <img src="{{ URL::asset('img/home/trusted_icon.png') }}" alt="Trusted">
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
                            {{--<i class="fa fa-money"></i>--}}
                            <img src="{{ URL::asset('img/home/no_hidden_cost_icon.png') }}" alt="No Hidden Cost">
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
                            {{--<i class="fa fa-users"></i>--}}
                            <img src="{{ URL::asset('img/home/24-7-icon.png') }}" alt="24 Jam">
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
                        <img src="{{ URL::asset('img/home/tokoh_agama_image.png') }}" alt="Testimoni Tokoh Agama">
                    </div>
                    <p>Program Kemenag
                        5-Pasti Umrah
                        adalah hanya sebagian
                        layanan Umrohzone.com</p>
                    <h6>Prof. Dr. Tokoh Agama</h6>
                </div>
                @foreach($testimonies as $testimony)
                    <div class="col-lg-4">
                        <div class="user-icon">
                            <img src="{{ URL::asset('img/home/tokoh_agama_image.png') }}" alt="Testimoni Tokoh Agama">
                        </div>
                        <p>{{$testimony->description}}</p>
                        @if($testimony->testimoni_type == 'App/Agen')
                            <h6>{{App\Agen::find($testimony->testimoni_id)}}</h6>
                        @else
                            <h6>{{App\Pemesan::find($testimony->testimoni_id)}}</h6>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-9">
                    {{--<img src="img/home/partners_official_payment.png" style="width:100%;"/>--}}
                    <img src="img/home/partners_official_payment_atas.jpg" style="width:100%;"/>
                    <br><br><br>
                    <img src="img/home/partners_official_payment_bawah.jpg" style="width:100%;"/>
                    <br><br><br><br><br><br>


                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-1">
                            <img src="img/home/payment_logos.png" style="height: 70px;"/>
                        </div>
                        <div class="col-sm-3">
                            <img src="img/home/idea_logo.png" style="height: 70px;"/>
                        </div>
                        <div class="col-sm-3">
                            <img src="img/home/ssl_icon.png" style="height: 70px;"/>
                        </div>
                        <div class="col-sm-2">
                            <img src="img/home/paypal_veritrans_logo.png" style="height: 70px;"/>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3">
                    <div class="row">
                        <img src="img/home/gplay.png" style="height: 50px; float: right;"/>
                        <br><br><br>
                        <img src="img/home/appstore.png" style="height: 50px; float: right;"/>
                    </div>
                    <br><br>

                    <div class="row">

                        <p style="color: black;" class="text-right">
                            Kantor kami:
                        </p>

                        <p style="margin:0;padding:0;color: black;" class="text-right">
                            Ruko PPG Widya Kartika
                        </p>

                        <p style="margin:0;padding:0;color: black;" class="text-right">
                            Mulyosari No. 156 Surabaya
                        </p>

                        <p style="color: black;" class="text-right">
                            INDONESIA 60113
                        </p>
                        <br>

                        <p style="margin:0;padding:0;color: black;" class="text-right">
                            0800 123 4122
                        </p>

                        <p style="color: black;" class="text-right">
                            webmaster@umrohzone.com
                        </p>
                        <br>
                    </div>
                    <div class="row">

                        <a target="_blank"
                           href="https://www.google.co.id/maps/place/Jl.+Raya+Mulyosari+No.156,+Kalisari,+Mulyorejo,+Kota+SBY,+Jawa+Timur+60112/@-7.2636668,112.7998047,17.75z/data=!4m5!3m4!1s0x2dd7f9f62b500691:0x65c92c9f51a22ba4!8m2!3d-7.263846!4d112.7956096?hl=en">
                            <img src="img/home/peta.jpg" style="width: 100%;"/>
                        </a>
                        <br><br>
                        <img src="img/home/sosmed.jpg" style="width: 50%;float:right;"/>
                    </div>
                </div>
                {{--<div class="col-lg-6">--}}
                {{--<h2 class="green">Hubungi Kami : </h2>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                {{--<ul class="list-inline banner-social-buttons">--}}
                {{--<li>--}}
                {{--<a href="https://twitter.com/umrohzone" class="btn btn-orange btn-lg">--}}
                {{--<i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="http://www.fb.com/umrohzone" class="btn btn-orange btn-lg">--}}
                {{--<i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="#" class="btn btn-orange btn-lg"><i class="fa fa-instagram fa-fw">--}}
                {{--</i> <span class="network-name">Instagram</span></a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="customise-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Sistem SMS belum berjalan. Silakan input email.</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('date-picker')
    <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
    {{--docs nya ada di sini : http://www.eyecon.ro/bootstrap-datepicker/#--}}

    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".not-responsive").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 4,
                slidesToScroll: 3
            });

            $(".promo-slick").slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>

    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function () {

            $('#datepicker-form-regular').datepicker({
                format: "dd/mm/yyyy"
            });

            $('#datepicker-form-private').datepicker({
                format: "dd/mm/yyyy"
            });

            $('#date-picker').datepicker();

        });
        function tempcheck() {
            var data = document.getElementById('customise-contact').value;
            if (!isNaN(data))
                $('#customise-modal').modal('show');
            else
                document.getElementById('customise').submit();
        }
    </script>
@endsection

@section('additional-script')
    <script src="{{ URL::asset('js/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script>
        var json = '{!!$prices!!}';
        console.log(json);
        json = JSON.parse(json.trim());
        console.log(json);
        var ctx = $("#myChart");
        var labels = [];
        var data = [];
        for (var i = 0; i < json.length; i++)    {
            labels.push(json[i].waktu);
            data.push(json[i].harga);
        }
        var data = {
            labels: labels,
            datasets: [
                {
                    label: "My First dataset",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: data
                }
            ]
        };
        var options ={
            responsive: true
        };
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });


    </script>
@endsection
