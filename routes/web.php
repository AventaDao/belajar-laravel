<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about',[
        "nama" => "John Doe",
        "umur" => "18",
    ]);
});

Route::get('/about/{id}/detail', function ($id) {
    return view('pages.detail', [
        "nomor" => $id,
    ]);
});

Route::view('contact','pages.contact');

// satu controller banyak method
Route::get('/product',[ProdukController::class, 'getProduk']);
Route::get('/product/tambah',[ProdukController::class, 'tambahProduk']);