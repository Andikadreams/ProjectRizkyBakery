<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ShopController extends Controller
{
    public function index(){
        $produk = Produk::paginate(2);
        $rating = Rating::get();
        return view('layouts.user.shop', compact('produk', 'rating'));
    }

    public function search(Request $request){
        if($request != ""){
            $produk = Produk::where('nama_produk', 'LIKE', "%$request->cari%")->get();
            return view('layouts.user.shop', compact('produk'));
        }else{
            $produk = Produk::get();
            return view('layouts.user.shop', compact('produk'));
        }
    }
}
