<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\OrderDetail;
use App\Models\User;

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
        $count_pelanggan = User::get('level')->where('level','==','pelanggan')->count();
        return view('dashboard_owner',compact('count_pelanggan'));
    }

    public function adminHome()
    {
        // $produk = Produk::all()->count();
        $count_produk = Produk::get()->count();
        $count_kategori = Kategori::get()->count();
        $count_orderMasuk = OrderDetail::get()->count();
        return view('dashboard_admin', ['count_produk' => $count_produk, 'count_kategori' => $count_kategori, 'count_orderMasuk' => $count_orderMasuk]);
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
