@extends('layouts.admin.app')

@section('title', 'Penjualan')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
    </div>
    <div class="card-body">
    <a class="btn btn-success right mb-3" href="{{ route('laporan.penjualan') }}">Laporan Penjualan</a>
    <a class="btn btn-danger right mb-3 ml-2" href="{{ route('cetak.laporan') }}">Cetak Laporan <i class="fas fa-print"></i></a>
    <form action="" method="GET">
    <div class="form-group">
        <label for="start_date">Tanggal Mulai:</label>
        <input type="date" name="start_date" id="start_date">
    </div>
    <div class="form-group">
        <label for="end_date">Tanggal Selesai:</label>
        <input type="date" name="end_date" id="end_date">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Cari</button>
    </form>
    <form class="form-left my-2"
            method="get" action="{{ route('pesanan.search') }}">
            <div class="input-group">
            <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                <div class="input-group-append">
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>Id Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Waktu Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @if($orderan = '1')
                    @foreach ($orderDetail as $order_details)
                    <tr>
                        <th>{{$order_details->order_id}}</th>
                        @foreach ($order as $orders)
                                @foreach ($user as $users)
                                @if ($orders->id == $order_details->order_id)    
                                    @if ($users->id == $orders->user_id)
                                    <td>{{ $users->name }}</td>
                                    @endif
                                @endif
                                @endforeach
                            @endforeach 
                            @foreach ($produk as $produks)
                            @if ($produks->id == $order_details->produk_id)
                            <td>{{ $produks->nama_produk }}</td>
                            @endif
                            @endforeach
                        <td>{{ $order_details->jumlah }}</td>
                        <td>{{ $order_details->jumlah_harga }}</td>
                        <td>{{ $order_details->created_at }}</td>
                    </tr>
                    @endforeach
                    @else
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection