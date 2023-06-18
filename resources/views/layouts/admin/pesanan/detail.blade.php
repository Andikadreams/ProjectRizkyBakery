@extends('layouts.admin.app')

@section('title', 'Pesanan')

@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pesanan
            </div>
            
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Transaksi: </b>{{$orderDetail->order_id}}</li>
                    <li class="list-group-item"><b>Nama Produk: </b>{{$orderDetail->Produk->nama_produk}}</li>
                    <li class="list-group-item"><b>Jumlah Pesanan: </b>{{$orderDetail->jumlah}}</li>
                    <li class="list-group-item"><b>Jumlah Harga: </b>{{$orderDetail->jumlah_harga}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pesanan') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
