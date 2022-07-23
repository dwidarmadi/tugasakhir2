

<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\PHP;

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

/* ADMIN */
Route::get('/test', function(){
    return view('layouts.admin.pengirimanhariiniadmin');
});

Route::get('/editdatapengguna', function(){
    return view('layouts.admin.editdatapengguna');
});

Route::get('/dashboardadmin', function(){
    return view('layouts.admin.dashboardadmin');
});

Route::get('/databankadmin', function(){
    return view('layouts.admin.databankadmin');
});

/* BUYER */
Route::get('/dashboardbuyer', function(){
    return view('layouts.buyer.dashboardbuyer');
});


Route::get('/statuspesananbuyer', function(){
    return view('layouts.buyer.statuspesananbuyer');
});

Route::get('/historipesanan', function(){
    return view('layouts.buyer.historipesanan');
});

Route::get('/keranjangbelanja', function(){
    return view('layouts.buyer.keranjangbelanja');
});


/* SELLER */
Route::get('/dashboardseller', function(){
    return view('layouts.seller.dashboardseller');
});

Route::get('/pesananmasukseller', function(){
    return view('layouts.seller.pesananmasukseller');
});

Route::get('/pengirimanhariiniseller', function(){
    return view('layouts.seller.pengirimanhariiniseller');
});

Route::get('/profilseller', function(){
    return view('layouts.seller.profilseller');
});

Route::get('/editpasswordseller', function(){
    return view('layouts.seller.editpasswordseller');
});

Route::get('/informasipesananseller', function(){
    return view('layouts.seller.informasipesananseller');
});

Route::get('/detailpesananseller', function(){
    return view('layouts.seller.detailpesananseller');
});
