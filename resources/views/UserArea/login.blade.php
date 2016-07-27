@extends('layouts.app')

@section('content')
    <div class="login-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 min-padd-r">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="login-form">
                                @include('partials._login-form')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="ilustration">
                                <h4>Ilustrasikan benefit untuk TA dan Sales person(insight)</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 min-padd-l">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="register-form" id="myTabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Travel Agent</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Personal
                                            Sales</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active travel-agent" id="home">
                                        <form action="" class="travel-agent-form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h5 style="color: red">All fields are mandatory</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Nama Travel Agent</label>
                                                        <input type="text" id="travel-agent-name" class="form-control"
                                                               placeholder="Nama tarvel agent"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Alamat</label>
                                                    <textarea id="travel-agent-address"
                                                              class="form-control" placeholder="Alamat" cols="30"
                                                              rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-province">Provinsi</label>
                                                        <select name="travel-agent-province" id="travel-agent-province" class="form-control">
                                                            <option value="#" selected>Pilih provinsi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-city">Kota</label>
                                                        <select name="travel-agent-province" id="travel-agent-city" class="form-control">
                                                            <option value="#" selected>Pilih kota</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Telepon 1</label>
                                                        <input type="text" id="travel-agent-phone1" class="form-control"
                                                               placeholder="Telepon 1"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Telepon 2</label>
                                                        <input type="text" id="travel-agent-phone2" class="form-control"
                                                               placeholder="Telepon 2"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name-directur">Nama Direktur</label>
                                                        <input type="text" id="travel-agent-name-directur" class="form-control"
                                                               placeholder="Nama Direktur"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">HP Direktur</label>
                                                        <input type="text" id="travel-agent-directur-phone" class="form-control"
                                                               placeholder="HP direktur"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-ppiu">Nomor PPIU</label>
                                                        <input type="text" id="travel-agent-ppiu" class="form-control"
                                                               placeholder="Nomor PPIU"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-bank-name">Nama Bank</label>
                                                        <input type="text" id="travel-agent-bank-name" class="form-control"
                                                               placeholder="Nama bank"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-ppiu">Nomor Rekening</label>
                                                        <input type="text" id="travel-agent-rekening-number" class="form-control"
                                                               placeholder="Nomor Rekening"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-scan-ppiu">Scan PPIU</label>
                                                        <input type="file" id="travel-agent-scan-ppiu" class="form-control"
                                                               placeholder="Scan PPIU"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-scan-asosiasi">Scan Asosiasi</label>
                                                        <input type="file" id="travel-agent-scan-asosiasi" class="form-control"
                                                               placeholder="Scan Asosiasi"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-scan-ref-bank">Scan Ref. Bank</label>
                                                        <input type="file" id="travel-agent-scan-ref-bank" class="form-control"
                                                               placeholder="Scan Ref. Bank"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Email</label>
                                                        <input type="email" id="travel-agent-email" class="form-control"
                                                               placeholder="Email"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-name">Password</label>
                                                        <input type="password" id="travel-agent-password" class="form-control"
                                                               placeholder="Password"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="travel-agent-confirm-password">Confirm Password</label>
                                                        <input type="text" id="travel-agent-confirm-password" class="form-control"
                                                               placeholder="Confirm Password"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="checkbox">
                                                        <label for="travel-agent-agree">
                                                            <input type="checkbox" id="travel-agent-agree"
                                                                   placeholder="Nama tarvel agent"/> I have read and agree with <a
                                                                    href="#">T&C</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Register" class="btn btn-custom"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane personal-sales" id="profile">

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