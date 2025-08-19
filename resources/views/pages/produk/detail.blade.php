@extends('layouts.master')

@section('konten')
    <h1>Detail Produk</h1>
    <hr>
    <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="alert alert-primary">
      <b>Nama Toko : </b> {{$data_toko['nama_toko']}}
      <br>
      <b>Alamat : </b> {{$data_toko['alamat']}}
      <br>
      <b>Tipe Toko : </b> {{$data_toko['type']}}
    </div>
    @if (session('message'))
    <div class="alert alert-primary">{{session('message')}}</div>
    @endif
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
  <div class="card-body">
</div>
@endsection