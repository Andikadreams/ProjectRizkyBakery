<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

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

    public function adminHome()
    {
        // $produk = Produk::all()->count();
        $produk = Produk::get();
        $count = $produk->count();
        return view('dashboard_admin', ['data' => $produk, 'count' => $count]);
        return view('dashboard_admin');
    }

    public function pelangganHome()
    {
        $produks = Produk::all();
        $kategori = Kategori::get();
        return view('index_pelanggan', compact('produks','kategori'));
        return view('index_pelanggan');
    }
}
