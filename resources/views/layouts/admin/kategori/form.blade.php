@extends('layouts.admin.app')

@section('title', 'Form Kategori')

@section('contents')
<form action="{{ isset($kategori) ? route('kategori.create.update', $kategori->id) : route('kategori.create.store') }}"
    method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" required="required" class="form-control" id="nama" name="nama"
                            value="{{ isset($kategori) ? $kategori->nama : '' }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_kategori">Kode Kategori</label>
                        <input type="number" required="required" class="form-control" id="kode_kategori" name="kode_kategori"
                            value="{{ isset($kategori) ? $kategori->kode_kategori : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('kategori') }}" class="btn btn-danger" role="button" aria-disabled="true" style="margin-left:5px">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
