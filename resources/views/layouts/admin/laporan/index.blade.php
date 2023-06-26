@extends('layouts.admin.app')

@section('title', 'Penjualan')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
    </div>
    <div class="card-body">
        <a class="btn btn-success right mb-3 ml-3" href="{{ route('laporan.penjualan') }}">Tampil Semua Laporan
            Penjualan</a>
        <a class="btn btn-danger right mb-3 ml-2" href="{{ route('cetak.laporan') }}">Cetak Semua Laporan <i
                class="fas fa-print"></i></a>

        <form action="" method="get">
            <div class="form-group ml-3">
                <label for="start_date">Tanggal Mulai &nbsp;&nbsp;&nbsp;:</label>
                <input type="date" required="required" name="start_date" id="start_date">
                <div class="form-group">
                    <label for="end_date">Tanggal Selesai :</label>
                    <input type="date" required="required" name="end_date" id="end_date">
                    <a onclick="validateForm()" class="btn btn-primary mb-2 ml-2">Cetak Laporan
                        PerTanggal <i class="fas fa-print"></i></a>
                </div>
            </div>
        </form>
        <script>
            function validateForm() {
                var startDate = document.getElementById('start_date').value;
                var endDate = document.getElementById('end_date').value;

                if (startDate === '' || endDate === '') {
                    alert('Harap isi kedua tanggal sebelum mencetak laporan.');
                    return false;
                }

                // Redirect to the print URL with the selected dates
                window.location.href = '/laporan/cetak/' + startDate + '/' + endDate;
            }

        </script>
        <form class="form-left my-2" method="get" action="{{ route('laporan.search.penjualan') }}">
            <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                <input type="text" name="search" class="form-control w-50 d-inline" id="search"
                    placeholder="Masukkan ID Transaksi atau Tanggal Pesanan">
                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                <div class="input-group-append">
                </div>
            </div>
            <p style="margin-left: 78%;"><b>Total Pendapatan : {{$count_penjualan}}</b></p>

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
