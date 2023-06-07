<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::get();

		return view('layouts.admin.produk.index', ['data' => $produk]);
    }

    public function indexShop(){
        $shop = Produk::get();
        return view('layouts.user.shop', compact('shop'));
    }

    public function cart(){
        return view('layouts.user.cart');
    }

    public function addToCart($id){
        $produk = Produk::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "product_name"=>$produk->nama_produk,
                "photo"=>$produk->foto_produk,
                "price"=>$produk->harga,
                "quantity"=> 1
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Product add to cart successfully');
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }


    
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
		return view('layouts.admin.produk.form', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = '';
        if ($request->file('image')) {
            $foto = $request->file('image')->store('images', 'public');
        }
        $data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
            'foto_produk' => $foto,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Produk::create($data);

		return redirect()->route('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
		$kategori = Kategori::get();
		return view('layouts.admin.produk.edit', ['produk' => $produk, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $foto = '';
        if ($request->file('image')) {
            $foto = $request->file('image')->store('image', 'public');
        }
        $data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
            'foto_produk' => $foto,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Produk::find($id)->update($data);

		return redirect()->route('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
		return redirect()->route('produk');
    }
}
