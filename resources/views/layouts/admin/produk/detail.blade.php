@extends('layouts.admin.app')

@section('title', 'Produk')

@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Produk
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Produk: </b>{{$produk->kode_produk}}</li>
                    <li class="list-group-item"><b>Nama Produk: </b>{{$produk->nama_produk}}</li>
                    <li class="list-group-item"><b>Foto Prooduk: <br></b><img width="100px" src="{{asset('storage/'.$produk->foto_produk)}}"></li>
                    <li class="list-group-item"><b>Kategori: </b>{{$produk->Kategori->nama}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$produk->harga}}</li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$produk->jumlah}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('produk') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection