<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('UserArea.bayar');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//================== ROUTE FOR PAYMENT GATEWAY ==========================

Route::group(['prefix' => 'payment', 'middleware' => 'auth'], function () {
    route::get('pay', function () {
        return view('PaymentArea.bayar-user');
    });
    route::post('pay', function () {
        return redirect('/payment/method');
    });
    route::get('method', function () {
        return view('PaymentArea.bayar-method');
    });
    route::post('method', function () {
        return redirect('/payment/summary');
    });
    route::get('summary', function () {
        return view('PaymentArea.bayar-summary');
    });
    route::post('summary', function () {
        return view('PaymentArea.bayar-summary');
    });
});
//================== ROUTE FOR AUTHENTICATION ==========================

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\AuthController@login');
    Route::post('login', 'Auth\AuthController@Authenticate');
    Route::get('register', 'UserController@create');
    Route::post('register', 'UserController@store');
});