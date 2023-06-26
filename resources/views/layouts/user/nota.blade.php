<!DOCTYPE html>
<html>

<head>
    <title>NOTA </title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Artikel</h4>
    </center>
    <table class='table table-bordered'>
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
            @foreach($order_details as $order_detail)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <img src="{{ $order_detail->produk->foto_produk }}" width="100" alt="...">
                </td>
                <td>{{ $order_detail->produk->nama_produk }}</td>
                <td>{{ $order_detail->jumlah }}</td>
                <td >Rp. {{ number_format($order_detail->produk->harga) }}</td>
                <td >Rp. {{ number_format($order_detail->jumlah_harga) }}</td>
                
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
</body>

</html>
