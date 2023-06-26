<!DOCTYPE html>
<html>

<head>
    <title>NOTA </title>

    <style>
        /* Gaya untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        /* Gaya untuk teks yang dicetak tebal */
        strong {
            font-weight: bold;
        }

        h1, h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Nota Pembayaran</h1>
    <h3>Toko Kue Rizky Bakery</h3>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
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
                <td>{{ $order_detail->produk->nama_produk }}</td>
                <td>{{ $order_detail->jumlah }}</td>
                <td >Rp. {{ number_format($order_detail->produk->harga) }}</td>
                <td >Rp. {{ number_format($order_detail->jumlah_harga) }}</td>
                
            </tr>
            @endforeach

            <tr>
                <td colspan="4" ><strong>Total Harga :</strong></td>
                <td ><strong>Rp. {{ number_format($order->jumlah_harga) }}</strong></td>
                
            </tr>
            <tr>
                <td colspan="4" ><strong>Kode Unik :</strong></td>
                <td ><strong>{{ number_format($order->kode) }}</strong></td>
                
            </tr>
             <tr>
                <td colspan="4" ><strong>Total yang harus ditransfer :</strong></td>
                <td ><strong>Rp. {{ number_format($order->kode+$order->jumlah_harga) }}</strong></td>
                
            </tr>
        </tbody>
    </table>
</body>

</html>
