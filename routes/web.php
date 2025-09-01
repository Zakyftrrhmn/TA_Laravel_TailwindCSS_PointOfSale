<?php

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// middleware(['auth'])->
Route::name('admin.')->prefix('admin')->group(function () {

    // Route::get('/user', [UserController::class, 'index'])->name('user.index');

    // kategori produk
    Route::resource('kategori_produk', KategoriProdukController::class);
});
