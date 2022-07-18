

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

/* ROUTE ADMIN */

Route::get('/contentdashboardadmin', function () {
    return view('layouts.admin.contentdashboardadmin');
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

// Route::get('/editdatabank', function () {
//     return view('layouts.admin.editdatabank');
// });

Route::get('/editdatabank', function(){
    return('asdasdasd');
});

Route::get('/editdatajasapengiriman', function () {
    return view('layouts.admin.editdatajasapengiriman');
});

Route::get('/tambahbank', function () {
    return view('layouts.admin.tambahbank');
});

Route::get('/tambahjasapengiriman', function () {
    return view('layouts.admin.tambahjasapengiriman');
});

Route::get('/editdatapengguna', function () {
    return view('layouts.admin.editdatapengguna');
});

/* ROUTE SELLER */

Route::get('/contentdashboardseller', function () {
    return view('layouts..seller.contentdashboardseller');
});

Route::get('/tambahprodukseller', function () {
    return view('layouts..seller.tambahprodukseller');
});


/* ROUTE BUYER */

// Route::get('/contentdashboardbuyer', function () {
//     return view('layouts.buyer.contentdashboardbuyer');
// });
