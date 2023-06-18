<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    
    
}
