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
        $validateKode = Produk::where('kode_produk', $request->kode_produk)->first();
        $validateNama = Produk::where('nama_produk', $request->nama_produk)->first();
        if ($validateKode) {
            return redirect()->route('produk')->with('error', 'Kode Produk Tidak Boleh Sama!');
        } elseif ($validateNama) {
            return redirect()->route('produk')->with('error', 'Nama Produk Tidak Boleh Sama!');
        } else {
            Produk::create($data);
            return redirect()->route('produk')->with('success', 'Berhasil Menambah Produk!');
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
        $validateKode = Produk::where('kode_produk', $request->kode_produk)
            ->where('id', '!=', $id)
            ->exists();
        $validateNama = Produk::where('nama_produk', $request->nama_produk)
            ->where('id', '!=', $id)
            ->exists();
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
        if ($produk->kode_produk == $request->kode_produk && $produk->nama_produk == $request->nama_produk 
        && $produk->harga == $request->harga && $produk->jumlah == $request->jumlah && $produk->foto_produk == $foto && $produk->id_kategori == $request->id_kategori) {
            return redirect()->route('produk')->with('info', 'Tidak Ada Perubahan Pada Data Produk.');
        } 
        else if ($validateKode) {
            return redirect()->route('produk')->with('error', 'Kode Produk Tidak Boleh Sama!');
        } else if ($validateNama) {
            return redirect()->route('produk')->with('error', 'Nama Produk Tidak Boleh Sama!');
        } else {
                Produk::find($id)->update($data);
                return redirect()->route('produk')->with('success', 'Berhasil Mengedit Produk!');
            }
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
		return redirect()->route('produk')->with('success','Berhasil Menghapus Data Produk');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $produk = Produk::join('kategori', 'produk.id_kategori', '=', 'kategori.id')
            ->where('produk.nama_produk', 'like', "%" . $keyword . "%")
            ->orWhere('produk.kode_produk', 'like', "%" . $keyword . "%")
            ->orWhere('kategori.nama', 'like', "%" . $keyword . "%")
            ->paginate(5);
        return view('layouts.admin.produk.index', ['data' => $produk])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
