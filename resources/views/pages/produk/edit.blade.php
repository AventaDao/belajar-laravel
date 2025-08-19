@extends('layouts.master')

@section('konten')
<h1>Update Data</h1>
    <div class="card">
        <div class="card-header">Update Data Produk</div>
        <div class="card-body">
            <form action="/produk/{{$data->id_produk}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $data->nama_produk) }}">
    @error('nama_produk')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label">Harga Produk</label>
    <input type="number" name="harga_produk" class="form-control" value="{{ old('harga_produk', $data->harga) }}">
    @error('harga_produk')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label">Deskripsi Produk</label>
    <textarea name="deskripsi_produk" class="form-control">{{ old('deskripsi_produk', $data->deskripsi_produk) }}</textarea>
    @error('deskripsi_produk')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection