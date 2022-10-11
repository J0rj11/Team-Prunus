<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\CustomerTransactionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ReportsController;
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
    Route::prefix('cashier')->group(function () {
        Route::resource('/customer',  App\Http\Controllers\CustomerController::class);
        Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);
        Route::resource('/category', \App\Http\Controllers\CategoryController::class);
        Route::resource('/product', \App\Http\Controllers\ProductController::class);
        Route::resource('/expense', \App\Http\Controllers\ExpenseController::class);

        Route::get('/transaction/{transaction}/setup', [\App\Http\Controllers\CustomerTransactionController::class, 'setup'])->name('transaction.setup');
        Route::resource('/transaction', \App\Http\Controllers\CustomerTransactionController::class);

        Route::resource('/balance', BalanceController::class);
        Route::resource('/delivery', DeliveryController::class)
            ->except('store', 'edit', 'create');

        Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
        Route::get('/reports/product-sold', [ReportsController::class, 'productSoldReport'])->name('reports.product-sold');
        Route::get('/reports/delivery-completed', [ReportsController::class, 'deliveryCompletedReport'])->name('reports.delivery-completed');
    });

    Route::view('/reports', 'report.index');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('/category', \App\Http\Controllers\Admin\AdminCategoryController::class);
        Route::resource('/customer', \App\Http\Controllers\Admin\AdminCustomerController::class);
        Route::resource('/supplier', \App\Http\Controllers\Admin\AdminSupplierController::class);
        Route::resource('/product',  \App\Http\Controllers\Admin\AdminProductController::class);
        Route::resource('/account', \App\Http\Controllers\Admin\AdminAccountController::class);
    });
});
