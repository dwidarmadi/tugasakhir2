

<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\PHP;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\JasaPengirimanController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\OrderController;

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

/**ROUTE BARU */


/**ROUTE PRODUCT */
Route::get('product',[ProductController::class,'index']);
Route::get('layouts/seller/tambahproduk',[ProductController::class,'tambahproduk']);





Route::resource('bank', BankController::class);

Route::resource('jasapengiriman', JasaPengirimanController::class);

Route::resource('keranjangbelanja', KeranjangBelanjaController::class);

Route::resource('order', OrderController::class);


/**ADMIN */

Route::get('/databankadmin', function(){
    return view('layouts.admin.databankadmin');
});

Route::get('/test', function(){
    return view('layouts.admin.pengirimanhariiniadmin');
});


Route::get('/dashboardadmin', function(){
    return view('layouts.admin.dashboardadmin');
});

Route::get('/databankadmin', function(){
    return view('layouts.admin.databankadmin');
});

Route::get('/datapenggunaadmin', function(){
    return view('layouts.admin.datajasapengirimanadmin');
});

Route::get('/editdatabank', function(){
    return view('layouts.admin.editdatabank');
});

Route::get('/datapenggunaadmin', function(){
    return view('layouts.admin.datapenggunaadmin');
});

Route::get('/editdatajasapengiriman', function(){
    return view('layouts.admin.editdatajasapengiriman');
});

Route::get('/pengirimanhariiniadmin', function(){
    return view('layouts.admin.pengirimanhariiniadmin');
});

Route::get('/informasipesananadmin', function(){
    return view('layouts.admin.informasipesananadmin');
});

Route::get('/tambahbank', function(){
    return view('layouts.admin.tambahbank');
});

Route::get('/tambahjasapengiriman', function(){
    return view('layouts.admin.tambahjasapengiriman');
});


Route::get('/tamplate-landing', function(){
    return view('layouts.tamplate-landing');
});

Route::get('/viewpengguna', function(){
    return view('layouts.admin.viewpengguna');
});

Route::get('/detailpesananadmin', function(){
    return view('layouts.admin.detailpesananadmin');
});









/* BUYER */
Route::get('/dashboardbuyer', function(){
    return view('layouts.buyer.dashboardbuyer');
});

Route::get('/profilbuyer', function(){
    return view('layouts.buyer.profilbuyer');
});

Route::get('/editpasswordbuyer', function(){
    return view('layouts.buyer.editpasswordbuyer');
});

// Route::get('/statuspesananbuyer', function(){
//     return view('layouts.buyer.statuspesananbuyer');
// });

Route::get('/historipesanan', function(){
    return view('layouts.buyer.historipesanan');
});

// Route::get('/keranjangbelanja', function(){
//     return view('layouts.buyer.keranjangbelanja');
// });

Route::get('/checkout', function(){
    return view('layouts.buyer.checkout');
});

Route::get('/uploadpay', function(){
    return view('layouts.buyer.uploadpay');
});

Route::get('/landingbuyer', function(){
    return view('layouts.buyer.landingbuyer');
});

Route::get('/detailproduk', function(){
    return view('layouts.buyer.detailproduk');
});









/* SELLER */
// Route::get('/produksaya', function(){
//     return view('layouts.seller.produksaya');
// });

Route::get('/dashboardseller', function(){
    return view('layouts.seller.dashboardseller');
});

Route::get('/pesananmasukseller', function(){
    return view('layouts.seller.pesananmasukseller');
});

Route::get('/pesanandikirim', function(){
    return view('layouts.seller.pesanandikirim');
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

// Route::get('/tambahproduk', function(){
//     return view('layouts.seller.tambahproduk');
// });

// Route::get('/dataproduk', function(){
//     return view('layouts.seller.dataproduk');
// });

Route::get('/editdataproduk', function(){
    return view('layouts.seller.editdataproduk');
});






/*TAMPLATE LANDING*/
Route::get('/tamplate-landing', function(){
    return view('layouts.tamplate-landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

