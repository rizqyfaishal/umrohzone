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
Route::get('/login', 'PageController@login');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);
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
Route::post('login', 'Auth\AuthController@login');

Route::group(['prefix' => 'auth/jamaah'], function () {
    route::get('register', 'JamaahController@create');
    route::post('register', 'JamaahController@store');
});

Route::group(['prefix' => 'auth/travel-agen'], function () {
    route::get('register', 'AgenController@showRegister');
    route::post('register', 'AgenController@store');
});

//========================= ROUTE FOR USER =============================

Route::group(['middleware' => 'auth'],function()    {
    route::get('/booking/{id}','UserController@getBooking');
});

Route::get('/logout','Auth\AuthController@logout');
Route::get('/api/provinsi/{id}','PageController@getRegencies');
Route::get('/dashboard','PageController@dashboard');

//tambahan luthfi dashboard
Route::get('/agent/dashboard','PageController@dashboardAgent');
Route::get('/agent/dashboard/infoakun','PageController@dashboardAgentInfoAkun');
Route::get('/agent/dashboard/daftarpemesan','PageController@dashboardAgentDaftarPemesan');
Route::get('/agent/dashboard/daftarpaket','PageController@dashboardAgentDaftarPaket');
Route::get('/agent/dashboard/buatpaket','PageController@dashboardAgentBuatPaket');
Route::get('/agent/dashboard/editpaket','PageController@dashboardAgentEditPaket');
Route::get('/user/dashboard','PageController@dashboardUser');
Route::get('/user/dashboard/infoakun','PageController@dashboardUserInfoAkun');
Route::get('/user/dashboard/booking','PageController@dashboardUserBooking');
//end of tambahan luthfi dashboard

Route::get('/invoice','PDFController@invoice');
Route::get('/pemesan','PemesanController@showRegister');
Route::post('/pemesan','PemesanController@postRegister');

//================== ROUTE FOR ADMIN ==========================
Route::group(['prefix' => 'admin'], function (){
    Route::get('dashboard','AdminController@index');
    Route::get('jamaah','AdminController@getJamaah');
    Route::get('travel-agent','AdminController@getTA');
    Route::get('hotel','AdminController@getHotels');
    Route::get('maskapai','AdminController@getAirlines');
});

Route::group(['prefix' => 'password'],function (){
    Route::post('email','Auth\PasswordController@sendResetLinkEmail');
    Route::post('reset','Auth\PasswordController@reset');
    Route::get('reset/{token?}','Auth\PasswordController@showResetForm');
});

Route::resource('embarkasi','EmbarkasiController');
Route::resource('bandara','BandaraController');
Route::resource('hotel','HotelController');
Route::resource('paket','PaketController');
Route::resource('pesawat','PesawatController');
Route::resource('penerbangan','PenerbanganController');
Route::resource('rating','RatingController');
Route::resource('fasilitas','FasilitasController');
Route::resource('hotel-fasilitas','HotelFasilitasController');
Route::resource('hotel-fasilitas-category','HotelFasilitasCategoryController');
Route::resource('terminal','TerminalController');
Route::resource('address','AddressController');
Route::resource('promo','PromoController');
Route::resource('agenda','AgendaController');
Route::resource('testimoni','TestimoniController');
Route::resource('agen','AgenController');
Route::resource('manasik','ManasikController');
Route::resource('paket-category','PaketCategoryController');
Route::resource('rekening','RekeningController');
Route::get('/attachments/all','AttachmentController@index');
Route::get('/list-paket','PageController@listPakets');

Route::group(['prefix' => 'api'],function (){
    Route::get('/paket-kategori','PaketCategoryController@getJson');
    Route::get('/paket-kategori/{id}/getPaket','PaketCategoryController@getPaketJson');
    Route::get('/paket/{id}','PaketController@show');
    Route::get('/paket/{id}/penerbangan','AngularController@getPaketPenerbangan');
    Route::get('/paket/{id}/pesawat','AngularController@getPaketPesawat');
    Route::get('/paket/{id}/hotelMekah/review','AngularController@getPaketHotelMekahReview');
    Route::get('/paket/{id}/hotelMekah','AngularController@getPaketHotelMekah');
    Route::get('/paket/{id}/hotelMadinah/review','AngularController@getPaketHotelMadinahReview');
    Route::get('/paket/{id}/hotelMadinah','AngularController@getPaketHotelMadinah');
    Route::get('/paket/{id}/hotelMadinah/photos','AngularController@getPaketHotelMadinahPhotos');
    Route::get('/paket/{id}/hotelMekah/photos','AngularController@getPaketHotelMekahPhotos');
    Route::get('/unique/{email}','AngularController@checkEmailUnique');
    Route::get('/user','PemesanController@getInformation');
    Route::get('/user/paket/{hash}','PemesanController@getInformationPaket');
    Route::post('/user/toogleCheckMitra','PemesanController@toogleCheckMitra');
    Route::post('/user/toogleCheckPromo','PemesanController@toogleCheckPromo');
    Route::get('/provinsi','AngularController@getAllProvinsi');
});

Route::get('p/{hashcode}','AttachmentController@get');
Route::get('/{id}/isi-data-jamaah','PemesanController@isiDataJamaah');
Route::post('pemesan-store-paket','PemesanController@registerPemesan');
Route::get('getUserData','PemesanController@getInformation');
