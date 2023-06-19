@extends('layouts.admin.app')

<<<<<<< HEAD
@section('title', 'Data Kategori')
=======
@section('title', 'Pesanan')
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
<<<<<<< HEAD
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
=======
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
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
<<<<<<< HEAD
                        <th>No</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Tanggal</th>
                        <th>Nama Pembeli</th>
=======
                        <th>Id Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Waktu Pemesanan</th>
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                    @php($no = 1)
                    @foreach ($order_detail as $order_details)
                    <tr>
                        <th>{{ $no++ }}</th>
                            @foreach ($produk as $produks)
                            @if ($produks->id == $order_details->produk_id)
                            <td>{{ $produks->nama_produk }}</td>
                            @endif
                            @endforeach
                        <td>{{ $order_details->jumlah }}</td>
                        <td>{{ $order_details->jumlah_harga }}</td>
                        <td>{{ $order_details->created_at }}</td>
                            @foreach ($order as $orders)
=======
                    @if($orderan = '1')
                    @foreach ($orderDetail as $order_details)
                    <tr>
                        <th>{{$order_details->order_id}}</th>
                        @foreach ($order as $orders)
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
                                @foreach ($user as $users)
                                @if ($orders->id == $order_details->order_id)    
                                    @if ($users->id == $orders->user_id)
                                    <td>{{ $users->name }}</td>
                                    @endif
                                @endif
                                @endforeach
                            @endforeach 
<<<<<<< HEAD
                        <td>
                            <a href="{{ route('kategori.edit', $users->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('kategori.destroy', $users->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
=======
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
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
                </tbody>
            </table>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
