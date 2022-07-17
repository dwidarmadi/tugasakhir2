

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.admin.masteradmin');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contentdashboardadmin', function () {
    return view('layouts.admin.contentdashboardadmin');
});

Route::get('/contentdashboardseller', function () {
    return view('layouts..seller.contentdashboardseller');
});

Route::get('/contentdashboardbuyer', function () {
    return view('layouts.buyer.contentdashboardbuyer');
});

Route::get('/pesananmasukadmin', function () {
    return view('layouts.admin.pesananmasukadmin');
});

Route::get('/pengirimanhariiniadmin', function () {
    return view('layouts.admin.pengirimanhariiniadmin');
});

Route::get('/datapenggunaadmin', function () {
    return view('layouts.admin.datapenggunaadmin');
});

Route::get('/databankadmin', function () {
    return view('layouts.admin.databankadmin');
});

Route::get('/datajasapengirimanadmin', function () {
    return view('layouts.admin.datajasapengirimanadmin');
});

Route::get('/editdatabank', function () {
    return view('layouts.admin.editdatabank');
});
