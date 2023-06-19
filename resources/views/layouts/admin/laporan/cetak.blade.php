<html>

<head>
    <!-- <title>Laporan Pejualan Rizky Bakery</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table.static {
            position: relative;
            border: 1px solid;
        }
        table.static td,
        table.static th {
            text-align: center;
        }

    </style>

    <title>Cetak Laporan Penjualan</title>

</head>

<body>
    <div style="text-align:center">
        <h4>PENJUALAN TOKO RIZKY BAKERY</h4>
        <h3 class="mb-4" style="margin-top: 1px; color:black">Laporan Penjualan</h3>
    </div>
    <div class="row justify-content-center align-items-center">
        <table class="static" align="center" border="1px" style="width:100 rem; height:auto">
            <tr>
                <th>No</th>
                <th>Id Transaksi</th>
                <th>Nama Pembeli</th>
                <th>Produk</th>
                <th>Jumlah Pesanan</th>
                <th>Total Harga</th>
                <th>Tanggal Pemesanan</th>
            </tr>
            <?php
                $no = 1
            ?>
            @foreach($orderDetail as $detail)
            <tr>
                <th>{{$no++}}</th>
                <th>{{$detail->order_id}}</th>
                @foreach ($namaPelanggan as $nama)
                <th>{{$nama->User->name}}</th>
                @endforeach
                @foreach ($produk as $produks)
                @if ($produks->id == $detail->produk_id)
                <td>{{ $produks->nama_produk }}</td>
                @endif
                @endforeach
                <td>{{ $detail->jumlah }}</td>
                <td>{{ $detail->jumlah_harga }}</td>
                @foreach($tanggal as $tgl)
                <td>{{ $tgl->tanggal }}</td>
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
