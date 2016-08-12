@extends('layouts.app')

@section('content')
    <div class="data-pemesan-field">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="data-pemesan-form">
                        @include('partials._data-pemesan-form')
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="data-pemesan-status">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="status-title">
                                    <h4>Keberangkatan</h4>
                                    <h2>20 Desember 2016</h2>
                                </div>
                                <div class="status-detail">
                                    <div class="status-logo">
                                        <h5>Logo</h5>
                                    </div>
                                    <div class="status-detail-item">
                                        <h5 class="first">Embarkasi</h5>
                                        <h5 class="second">Jakarta</h5>
                                    </div>
                                    <div class="status-detail-item">
                                        <h5 class="first">Airlines</h5>
                                        <h5 class="second">Garuda Indonesia</h5>
                                    </div>
                                    <div class="status-detail-item">
                                        <h5 class="first">Durasi Perjalanan</h5>
                                        <h5 class="second">11 Hari</h5>
                                    </div>
                                    <div class="status-detail-item">
                                        <h5 class="first">Harga</h5>
                                        <h5 class="second">$ 2.250 per jamaah</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection