<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('barang_masuk', BarangMasukController::class);
Route::resource('barang_keluar', BarangKeluarController::class);
