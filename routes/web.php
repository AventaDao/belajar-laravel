<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'John Doe',
        'umur' => 18,
        'alamat' => 'Indonesia',
    ]);
});


Route::view('/contact', 'pages.contact');

// Route untuk Produk
Route::get('/product', [ProdukController::class, 'index']);
Route::get('/product/create', [ProdukController::class, 'create']); 
Route::post('/product', [ProdukController::class, 'store']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);
