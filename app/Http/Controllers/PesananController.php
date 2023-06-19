<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $order = Order::get();
        $order_detail = OrderDetail::get();
        $produk = Produk::get();
        $user = User::get();
        return view('layouts.admin.pesanan.index', compact('order','order_detail','produk','user'));
    }
=======
use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use Barryvdh\DomPDF\PDF;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PesananController extends Controller
{
    public function pesananMasuk(){
        $orderan = Order::get('status');
        $order = Order::all();
        $user = User::all();
        $produk = Produk::all();
        $orderDetail = OrderDetail::all();

    	return view('layouts.admin.pesanan.index', compact('order','user','produk','orderDetail','orderan'));
    }

    public function show($id){
        $orderDetail = OrderDetail::find($id);
        return view('layouts.admin.pesanan.detail', compact('orderDetail'));
    }

    public function laporanPenjualan(){
        $orderan = Order::get('status');
        $order = Order::all();
        $user = User::all();
        $produk = Produk::all();
        $orderDetail = OrderDetail::all();
        return view('layouts.admin.laporan.index', compact('order','user','produk','orderDetail','orderan'));
    }

    public function cetakLaporan(){
        // $orderan = Order::get('status');
        // $order = Order::get('id');
        // $produk = Produk::get();
        // $orderDetail = OrderDetail::get();
        // $tanggal = Order::get('tanggal');
        // $namaPelanggan = Order::get('user_id'); 
        // $pdf = PDF::loadView('layouts.admin.laporan.cetak', compact('order', 'produk', 'orderDetail', 'tanggal', 'namaPelanggan'));
        // return $pdf->download('Laporan-Penjualan.pdf');
        // return view('layouts.admin.laporan.cetak', compact('order','produk','orderDetail','tanggal','namaPelanggan'));

        $order = Order::get('id');
        $produk = Produk::get();
        $orderDetail = OrderDetail::get();
        $tanggal = Order::get('tanggal');
        $namaPelanggan = Order::get('user_id');

        $view = View::make('layouts.admin.laporan.cetak', compact('order', 'produk', 'orderDetail', 'tanggal', 'namaPelanggan'));
        $html = $view->render();

        $pdf = app(PDF::class);
        $pdf->loadHTML($html);

        return $pdf->stream('Laporan-Penjualan.pdf');
    }
    
    
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
}
