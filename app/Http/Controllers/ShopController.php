<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $produk = Produk::get();
        return view('layouts.user.shop', compact('produk'));
    }
}
