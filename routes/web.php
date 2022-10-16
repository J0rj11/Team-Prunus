<?php

use App\Http\Controllers\Admin\AdminReportsController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\Customer\CustomerReservationController;
use App\Http\Controllers\CustomerTransactionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ReservationBalanceController;
use App\Http\Controllers\ReservationController;
use App\Http\Livewire\SetupCustomerTransaction;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
// Route::get('/cashier', [App\Http\Controllers\CashierController::class, 'index'])->name('cashier');;


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('/home', [CustomerDashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/reservation', [CustomerReservationController::class, 'index'])->name('reservation.index');
    });


    Route::prefix('cashier')->group(function () {

        Route::view('/home', 'cashier.cashierDashboard')->name('cashier.index');

        Route::resource('/customer',  App\Http\Controllers\CustomerController::class);
        Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);
        Route::resource('/category', \App\Http\Controllers\CategoryController::class);
        Route::resource('/product', \App\Http\Controllers\ProductController::class);
        Route::resource('/expense', \App\Http\Controllers\ExpenseController::class);

        Route::get('/transaction/{transaction}/setup', [\App\Http\Controllers\CustomerTransactionController::class, 'setup'])->name('transaction.setup');
        Route::resource('/transaction', \App\Http\Controllers\CustomerTransactionController::class);

        Route::resource('/balance', BalanceController::class);
        Route::resource('/reservation-balance', ReservationBalanceController::class)
            ->except('store', 'edit', 'create');
        Route::resource('/delivery', DeliveryController::class)
            ->except('store', 'edit', 'create');


        Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
        Route::get('/reports/product-sold', [ReportsController::class, 'productSoldReport'])->name('reports.product-sold');
        Route::get('/reports/delivery-completed', [ReportsController::class, 'deliveryCompletedReport'])->name('reports.delivery-completed');


        Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
        Route::get('/reservation/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
        Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
    });

    Route::view('/reports', 'report.index');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('/category', \App\Http\Controllers\Admin\AdminCategoryController::class);
        Route::resource('/customer', \App\Http\Controllers\Admin\AdminCustomerController::class);
        Route::resource('/supplier', \App\Http\Controllers\Admin\AdminSupplierController::class);
        Route::resource('/product',  \App\Http\Controllers\Admin\AdminProductController::class);
        Route::resource('/account', \App\Http\Controllers\Admin\AdminAccountController::class);
        Route::resource('/delivery', \App\Http\Controllers\Admin\AdminDeliveryController::class);

        Route::get('/reports', [AdminReportsController::class, 'index'])->name('reports.index');
        Route::get('/reports/product-sold', [AdminReportsController::class, 'productSoldReport'])->name('reports.product-sold');
        Route::get('/reports/delivery-completed', [AdminReportsController::class, 'deliveryCompletedReport'])->name('reports.delivery-completed');

        Route::get('/reservation', [AdminReservationController::class, 'index'])->name('reservation.index');
        Route::put('/reservation/{reservation}/approve', [AdminReservationController::class, 'approveReservation'])->name('reservation.approve');
        Route::put('/reservation/{reservation}/decline', [AdminReservationController::class, 'declineReservation'])->name('reservation.decline');
    });
});
