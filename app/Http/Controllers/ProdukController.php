<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        $toko = [
            'nama_toko' => 'Toko Saya',
            'alamat' => 'Sidoarjo',
            'type' => 'Ruko'
        ];
        $produk = produk::get();
       //$queryBuilder = DB::table('tb_produk')->get();
        return view('pages.produk.show', [
            'data_toko'=>$toko,
            'data_produk'=>$produk,
        ]);
    }

    public function create(){
        return view('pages.produk.add');
    }

    public function store(Request $request){
        $request->validate([
            'nama_produk'=>'required|min:8|max:12',
            'harga_produk'=>'required',
            'deskripsi_produk'=>'required',
        ],[
            "nama_produk.min"=>"Nama Produk Minimal 8 Karakter",
            "nama_produk.max"=>"Nama Produk Maksimal 12 Karakter",
            "nama_produk.required"=>"Nama Produk Tidak Boleh Kosong",
            "harga_produk.required"=>"Harga Produk Tidak Boleh Kosong",
            "deskripsi_produk.required"=>"Deskripsi Produk Tidak Boleh Kosong",
        ]);

        produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga_produk,
            'deskripsi_produk'=>$request->deskripsi_produk,
            'kategori_id'=>'1'
        ]);


        return redirect('/product')->with('message', 'Berhasil Menambahkan Data');
    }

    public function show($id){
            $data = produk::findOrFail($id);
           
            // DB::table('tb_produk')->where('id_produk',$id)->firstOrFail();

            return view('pages.produk.detail',$data);
    }
}