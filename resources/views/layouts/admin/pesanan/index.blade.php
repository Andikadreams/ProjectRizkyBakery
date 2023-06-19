@extends('layouts.admin.app')

@section('title', 'Pesanan')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
    </div>
    <div class="card-body">
    <a class="btn btn-success right mb-3" href="{{ route('pesanan') }}">Tampilkan Semua Pesanan</a>
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
                        <th>Aksi</th>
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
                        <td>
                            <a href="{{ route('pesanan.detail', $order_details->id) }}" class="btn btn-info">Detail</a>                        </td>
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
