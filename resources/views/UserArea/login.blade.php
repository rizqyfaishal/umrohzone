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
                                        @include('partials._travel-agent-register')
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