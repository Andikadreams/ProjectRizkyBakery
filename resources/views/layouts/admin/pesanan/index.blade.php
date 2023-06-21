@extends('layouts.admin.app')

@section('title', 'Pesanan')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
    </div>
    <div class="card-body">
    <a class="btn btn-success left mb-3 ml-3" href="{{ route('pesanan') }}">Tampilkan Semua Pesanan</a>
    <form class="form-left my-2" method="get" action="{{ route('pesanan') }}">
            <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
            <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                <div class="input-group-append">
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" widtd="100%" cellspacing="0">
            <tdead>
                    <tr>
                        <th>Id Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Waktu Pemesanan</th>
                        <th>Aksi</th>
                    </tr>
                </tdead>
                <tbody>
                    @if($orderan = '1')
                    @foreach($orderDetail as $data)
                    <tr>
                        <td>{{$data->order_id}}</td>
                        <td>{{$data->order->user->name}}</td>
                        <td>{{$data->produk->nama_produk}}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->jumlah_harga}}</td>
                        <td>{{$data->order->tanggal}}</td>
                        <td>
                            <a href="{{ route('pesanan.detail', $data->id) }}" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="my-2" width="500px">
                {{$orderDetail->withQueryString()->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection
