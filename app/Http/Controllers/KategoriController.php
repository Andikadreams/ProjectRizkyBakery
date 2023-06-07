<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
		return view('layouts.admin.kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.kategori.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create(['nama' => $request->nama]);
		return redirect()->route('kategori');
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
        $kategori = Kategori::find($id);
		return view('layouts.admin.kategori.form', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        Kategori::find($id)->update(['nama' => $request->nama]);
		return redirect()->route('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$kategori = DB::table('kategori')->find($id);
			$produk = DB::table('produk')->where('id_kategori', $id)->get();
			if($produk->count() == 0) {
			$kategori = DB::table('kategori')->where('id', $id)->delete();
			} else{
				DB::table('produk')->where('id_kategori', $id)->update(['id_kategori' => 1]);
				$kategori = DB::table('kategori')->where('id', $id)->delete();
			// return response()->json(['message' => 'Maaf Kategori ini terdapat dalam tabel produk']);
			return redirect()->route('kategori');
		}
    }
}
