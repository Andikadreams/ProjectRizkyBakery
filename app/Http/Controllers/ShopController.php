<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\PaginationServiceProvider;

class ShopController extends Controller
{
    public function index(){
        $produk = Produk::paginate(6);
        $rating = Rating::get();
        return view('layouts.user.shop', compact('produk', 'rating'));
    }

    public function search(Request $request){
        if($request != ""){
            $rating = Rating::get();
            $produk = Produk::where('nama_produk', 'LIKE', "%$request->cari%")->paginate(6);

            return view('layouts.user.shop', compact('produk', 'rating'));
        }else{
            $rating = Rating::get();
            $produk = Produk::get();
            return view('layouts.user.shop', compact('produk', 'rating'));
        }
    }
}
