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

		return view('produk.index', ['data' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
		return view('produk.form', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
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
        $produk = Produk::find($id)->first();
		$kategori = Kategori::get();
		return view('produk.form', ['produk' => $produk, 'kategori' => $kategori]);
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
        $data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
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
