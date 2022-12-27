<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix'=>'/'], function() {
    // home
    Route::get('home', [HomePageController::class, 'home'])->name('home');

    // kategori
    Route::get('kategori', [HomePageController::class, 'kategori'])->name('page.kategori');
});

Route::group(['prefix'=>'/admin'], function() {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // kategori
    Route::group(['prefix'=>'kategori'], function() {
        Route::get('', [KategoriController::class, 'index'])->name('admin.kategori.index');
        Route::get('create', [KategoriController::class, 'create'])->name('admin.kategori.create');
        Route::get('edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
        Route::get('show/{id}', [KategoriController::class, 'show'])->name('admin.kategori.show');
    });

    // produk
    Route::group(['prefix'=>'produk'], function() {
        Route::get('', [ProdukController::class, 'index'])->name('admin.produk.index');
        Route::get('create', [ProdukController::class, 'create'])->name('admin.produk.create');
        Route::get('edit/{id}', [ProdukController::class, 'edit'])->name('admin.produk.edit');
    });

    // customer
    Route::group(['prefix'=>'customer'], function() {
        Route::get('', [CustomerController::class, 'index'])->name('admin.customer.index');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('admin.customer.edit');
    });

    // transaksi
    Route::group(['prefix'=>'transaksi'], function() {
        Route::get('', [TransaksiController::class, 'index'])->name('admin.transaksi.index');
        Route::get('show/{id}', [TransaksiController::class, 'show'])->name('admin.transaksi.show');
        Route::get('edit/{id}', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit');
    });

    // user profile
    Route::group(['prefix'=>'profile'], function() {
        Route::get('', [UserController::class, 'index'])->name('admin.profile.index');
        Route::get('setting/{id}', [UserController::class, 'edit'])->name('admin.profile.edit');
    });

    // laporan
    Route::group(['prefix'=>'laporan'], function() {
        Route::get('', [LaporanController::class, 'index'])->name('admin.laporan.index');
        Route::get('/detail/{id}', [LaporanController::class, 'show'])->name('admin.laporan.detail');
    });
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
