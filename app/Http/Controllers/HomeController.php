<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\OrderDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // // public function __construct()
    // // {
    //     $this->middleware('auth');
    // // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produks = Produk::all();
        $kategori = Kategori::get();
        return view('index_pelanggan', compact('produks','kategori'));
    }

    public function ownerHome(){
        return view('dashboard_owner');
    }

    public function adminHome()
    {
        // $produk = Produk::all()->count();
        $orderMasuk = OrderDetail::get();
        $produk = Produk::get();
        $kategori = Kategori::get();
        $count_produk = $produk->count();
        $count_kategori = $kategori->count();
        $count_orderMasuk = $orderMasuk->count();
        return view('dashboard_admin', ['data' => $produk, 'count_produk' => $count_produk, 'count_kategori' => $count_kategori, 'count_orderMasuk' => $count_orderMasuk]);
        // return view('dashboard_admin');
    }

    public function pelangganHome()
    {
        $produks = Produk::all();
        $kategori = Kategori::get();
        return view('index_pelanggan', compact('produks','kategori'));
        // return view('index_pelanggan');
    }
}
