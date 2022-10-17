

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
Route::get('/produk/{id}', [LandingPageController::class, 'SingleProduct'])->name('public.singleproduct');
Route::get('/about', function () {
    return view('layouts.tentang');
});
Route::get('/cara-belanja', function () {
    return view('layouts.carabelanja');
});

/**PREFIEX */
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index2'])->name('admin.dashboard');

    Route::resource('bank', BankController::class);

    Route::resource('jasapengiriman', JasaPengirimanController::class);

    Route::get('/order/order-in', [OrderController::class, 'indexAdmin'])->name('admin.orderlist.index');
    Route::post('/update/payment-status/{id}', [OrderController::class, 'paymentUpdate'])->name('admin.payment.check');
});

Route::prefix('seller')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index1'])->name('seller.dashboard');

    Route::resource('product', ProductController::class);

    Route::resource('order', OrderController::class);

    Route::get('/shipping/{id}', [OrderController::class, 'createShipping'])->name('seller.shipping');
    Route::post('/shipping/store/{id}', [OrderController::class, 'storeShipping'])->name('seller.shipping.store');
});

Route::prefix('buyer')->group(function () {
    Route::get('/dashboard', [DashboardAll::class, 'index'])->name('buyer.dashboard');

    Route::get('/viewproductbuyer/{id}', [ProductController::class, 'showbuyer'])->name('buyer.viewproductbuyer');

    Route::resource('chart', ChartController::class);

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('buyer.checkout.index');
    Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('buyer.checkout.store');

    Route::get('/order/history', [OrderController::class, 'indexHistory'])->name('buyer.orderhistory.index');
    Route::get('/order/order-list', [OrderController::class, 'indexBuyer'])->name('buyer.orderlist.index');


    Route::get('/pay/{id}', [OrderController::class, 'createPay'])->name('buyer.pay');
    Route::post('/pay/store/{id}', [OrderController::class, 'storePay'])->name('buyer.pay.store');
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

Route::get('/pesanan', function () {
    return view('layouts.buyer.statuspesananbuyer');
});




/*TAMPLATE LANDING*/
Route::get('/tamplate-landing', function () {
    return view('layouts.tamplate-landing');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('staging', function () {
    return view('layouts/base.baselayout');
});
