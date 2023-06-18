@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('riwayat') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('riwayat') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> dengan nominal : <strong>Rp. {{ number_format($order->kode+$order->jumlah_harga) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($order))
                    <p>Tanggal Pesan : {{ $order->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($order_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('uploads') }}/{{ $pesanan_detail->produk->foto_produk }}" width="100" alt="...">
                                </td>
                                <td>{{ $pesanan_detail->produk->nama_produk }}</td>
                                <td>{{ $pesanan_detail->jumlah }}</td>
                                <td >Rp. {{ number_format($pesanan_detail->produk->harga) }}</td>
                                <td >Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" ><strong>Total Harga :</strong></td>
                                <td ><strong>Rp. {{ number_format($order->jumlah_harga) }}</strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5" ><strong>Kode Unik :</strong></td>
                                <td ><strong>{{ number_format($order->kode) }}</strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" ><strong>Total yang harus ditransfer :</strong></td>
                                <td ><strong>Rp. {{ number_format($order->kode+$order->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection