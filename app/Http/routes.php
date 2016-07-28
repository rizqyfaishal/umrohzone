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

Route::get('/', 'PageController@index');
Route::get('/booking-status', 'PageController@bookingStatus');
Route::get('/features', 'PageController@features');
Route::get('/login','PageController@login');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//================== ROUTE FOR PAYMENT GATEWAY ==========================

Route::group(['prefix' => 'payment', 'middleware' => 'auth'], function () {
    route::get('pay', function () {
        return view('PaymentArea.bayar-user');
    });
    route::post('pay', 'RekeningController@inputrek');
    route::get('method', function () {
        return view('PaymentArea.bayar-method');
    });
    route::post('method', 'RekeningController@inputmethod');
    route::get('summary', 'RekeningController@summary');
    route::post('summary', 'RekeningController@finalize');

    route::get('process/','GatewayController@show');
    route::get('process/{id}','GatewayController@validateTransaction');
});
//================== ROUTE FOR AUTHENTICATION ==========================

//Route::get('login', 'Auth\AuthController@login');
Route::post('login', 'Auth\AuthController@Authenticate');

Route::group(['prefix' => 'auth'], function () {
    route::get('register', 'UserController@create');
    route::post('register', 'UserController@store');
});

//========================= ROUTE FOR USER =============================

Route::group(['middleware' => 'auth'],function()    {
    route::get('/booking/{id}','UserController@getBooking');
});