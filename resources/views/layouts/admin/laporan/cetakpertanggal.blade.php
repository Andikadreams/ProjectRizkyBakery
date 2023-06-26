<!DOCTYPE html>
<html>

<head>
    <title>Laporan Penjualan Rizky Bakery</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #000100;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" 
        <div class="container mt-1">
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <table border="0" width="100%" style="text-align:center;">
            <tbody>
                <tr>
                        <div>
                            <span style="font-family: 'Times New Roman'; font-size:16pt"><b>TOKO KUE RIZKY BAKERY</b></span><br>
                            <span style="font-family: 'Times New Roman'; font-size:14pt">Jl. Atletik, Tasikmadu, Kec. Lowokwaru,
                            Kota Malang, Jawa Timur. Telp.(0341) 351828</span><br>
                            <span style="font-family: 'Times New Roman'; font-size:14ptt">e-mail :<a
                                    href="mailto:">rizkybakery@gmail.com</a></span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr style="height:10px; border:0; border-top:3px double #000000">
        <div style="text-align: center">
            <h3>Laporan Penjualan</h3><br>
        </div>

        <table id="customers">
            <tr>
            <tr>
                        <th>Id Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Harga</th>
                        <th>Waktu Pemesanan</th>
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
                    </tr>
                    @endforeach
                    @endif
        </table>
    </div>
</body>


</html>