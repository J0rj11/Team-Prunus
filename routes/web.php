<?php

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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');;
Route::get('/cashier', [App\Http\Controllers\CashierController::class, 'index'])->name('cashier');;


Route::group(['prefix' => 'cashier', 'middleware' => 'auth'], function () {
    Route::resource('/customer',  App\Http\Controllers\CustomerController::class);
    Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);
    Route::resource('/category', \App\Http\Controllers\CategoryController::class);
    Route::resource('/product', \App\Http\Controllers\ProductController::class);
});


