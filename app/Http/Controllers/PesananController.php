<?php

namespace App\Http\Controllers;

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
}
