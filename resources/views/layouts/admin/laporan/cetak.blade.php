<html>
<head>
    <title>Laporan Pejualan Rizky Bakery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="mt-4" style="text-align:center">
                <h4>JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG</h4>
                <h3 style="margin-top: 20px; color:black">Kartu Hasil Studi (KHS)</h3>
            </div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
        <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Pembeli</th>
                <th>Produk</th>
                <th>Jumlah Pesanan</th>
                <th>Total Harga</th>
                <th>Tanggal Penjualan</th>
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
</div>1

</body>
</html>
