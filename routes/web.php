

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\PHP;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardAll;
use App\Http\Controllers\DashboardBuyer;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\JasaPengirimanController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes(['verify' => true]);
// Route::resource('order', OrderController::class);

Route::get('/', [LandingPageController::class, 'index']);

/**PREFIEX */
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index2'])->name('admin.dashboard');

    Route::resource('bank', BankController::class);

    Route::resource('jasapengiriman', JasaPengirimanController::class);
});

Route::prefix('seller')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index1'])->name('seller.dashboard');

    Route::resource('product', ProductController::class);

    Route::resource('order', OrderController::class);
});

Route::prefix('buyer')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index'])->name('buyer.dashboard');

    Route::get('/viewproductbuyer/{id}', [ProductController::class, 'showbuyer'])->name('buyer.viewproductbuyer');

    Route::resource('chart', ChartController::class);

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('buyer.checkout.index');
    Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('buyer.checkout.store');
});

/**MODAL */
Route::get('/detail/{id}', [ProductController::class, 'showlanding'])->name('pruduct.showlanding');

Route::get('/showdetailchart/{id}', [ChartController::class, 'showmodal'])->name('chart.showmodal');

Route::get('/showdetail/{id}', [ProductController::class, 'showmodal'])->name('pruduct.showmodal');

Route::get('/showdetailbank/{id}', [BankController::class, 'show'])->name('bank.showmodalbank');

Route::get('/showdetailjp/{id}', [JasaPengirimanController::class, 'show'])->name('jasa_pengiriman.showmodaljp');



/**TEST ROUTE */

Route::get('/tentang', function () {
    return view('layouts.tentang');
});

Route::get('/carabelanja', function () {
    return view('layouts.carabelanja');
});

Route::get('/pay', function () {
    return view('layouts.buyer.uploadpay');
});

Route::get('/pesanan', function () {
    return view('layouts.buyer.statuspesananbuyer');
});




/*TAMPLATE LANDING*/
Route::get('/tamplate-landing', function () {
    return view('layouts.tamplate-landing');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
