<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::paginate(5);
		return view('layouts.admin.produk.index', ['data' => $produk]);
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
        $validate = Produk::where('kode_produk', $request->kode_produk)->first();
        if($validate){
            Alert::error('Gagal Menambah Produk','Kode Produk Tidak Boleh Sama!');
            return redirect()->route('produk');
        }
        else{
            Produk::create($data);
		    return redirect()->route('produk')->with('success','Berhasil Menambahkan Produk');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        return view('layouts.admin.produk.detail', compact('produk'));
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
        // if ($request->hasFile('image')) {
        //     $foto = $request->file('image')->store('image', 'public');
        // }
        if ($request->hasFile('image')) {
            if ($produk->foto_produk && file_exists(storage_path('app/public/' . $produk->foto_produk))) {
                Storage::delete('public/' . $produk->foto_produk);
            }
            $foto = $request->file('image')->store('images', 'public');
        } else {
            $foto = $produk->foto_produk;
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

    public function search(Request $request){
        $keyword = $request->search;
        $produk = Produk::where('nama_produk', 'like', "%" . $keyword . "%")->paginate(5);
        return view('layouts.admin.produk.index', ['data' => $produk])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
