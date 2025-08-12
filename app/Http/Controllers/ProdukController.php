<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function getProduk(){
        $data_toko = [
            'nama_toko' => 'Toko Saya',
            "alamat" => 'Sidoarjo',
            'type' => 'Ruko'
        ];
        return view('pages.product',$data_toko);
    }

    public function tambahProduk(){
        return view('pages.addProduct');
    }
}
