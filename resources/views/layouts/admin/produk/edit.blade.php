@extends('layouts.admin.app')

@section('title', 'Form Produk')

@section('contents')
<form action="{{ route('produk.edit', $produk->id) }}"
    method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Form Edit Produk</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_produk">Kode Produk</label>
                        <input type="text" class="form-control" required="required" id="kode_produk" name="kode_produk"
                            value="{{ $produk->kode_produk }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" required="required" id="nama_produk" name="nama_produk"
                            value="{{ $produk->nama_produk }}">
                    </div>
                    <div class="form-group">
                            <label for="image">Foto Produk</label><br>
                            <img width="150px" src="{{asset('storage/foto_produk/'.$produk->foto_produk)}}" style="margin-bottom: 13px;">
                            <input type="file" class="form-control" name="image" value="{{ isset($produk) ? $produk->foto_produk : '' }}">
                        </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori Produk</label>
                        <select name="id_kategori" required="required" id="id_kategori" class="custom-select">
                            <option value="" selected disabled hidden>-- Pilih Kategori --</option>
                            @foreach ($kategori as $row)
                            <option value="{{ $row->id }}"
                                {{ ($produk->id_kategori == $row->id ? 'selected' : '')}}>
                                {{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Produk</label>
                        <input type="number" class="form-control" required="required" id="harga" name="harga"
                            value="{{ $produk->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Produk</label>
                        <input type="number" class="form-control" required="required" id="jumlah" name="jumlah"
                            value="{{ $produk->jumlah }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('produk') }}" class="btn btn-danger" role="button" aria-disabled="true" style="margin-left:5px">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
