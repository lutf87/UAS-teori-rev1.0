<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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
    Route::get('home', [HomePageController::class, 'home'])->name('page.home');

    // kategori
    Route::get('kategori', [HomePageController::class, 'kategori'])->name('page.kategori');
});

Route::group(['prefix'=>'/admin'], function() {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // kategori
    Route::group(['prefix'=>'kategori'], function() {
        Route::get('', [KategoriController::class, 'index'])->name('admin.kategori.index');
        Route::get('create', [KategoriController::class, 'create'])->name('admin.kategori.create');
        Route::get('edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    });

    // produk
    Route::group(['prefix'=>'produk'], function() {
        Route::get('', [ProdukController::class, 'index'])->name('admin.produk.index');
        Route::get('create', [ProdukController::class, 'create'])->name('admin.produk.create');
    });
});
