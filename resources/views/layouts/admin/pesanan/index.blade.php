@extends('layouts.admin.app')

@section('title', 'Data Kategori')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Tanggal</th>
                        <th>Nama Pembeli</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
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
                                @foreach ($user as $users)
                                @if ($orders->id == $order_details->order_id)    
                                    @if ($users->id == $orders->user_id)
                                    <td>{{ $users->name }}</td>
                                    @endif
                                @endif
                                @endforeach
                            @endforeach 
                        <td>
                            <a href="{{ route('kategori.edit', $users->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('kategori.destroy', $users->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
