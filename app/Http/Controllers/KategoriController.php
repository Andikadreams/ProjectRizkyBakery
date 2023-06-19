<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::paginate(5);
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
        $validate = Kategori::where('nama', $request->nama)->first();
        if($validate){
            // Alert::error('Gagal Menambah Kategori','Nama Kategori Tidak Boleh Sama!');
            return redirect()->route('kategori')->with('error','Nama Kategori Tidak Boleh Sama!');
        }
        else{
            Kategori::create(['nama' => $request->nama]);
            // Alert::success('Berhasil','Berhasil Menambah Kategori!');
		    return redirect()->route('kategori')->with('success', 'Berhasil Menambah Kategori!');
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
        $kategori = Kategori::find($id);
        return view('layouts.admin.kategori.detail', compact('kategori'));
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
        // Alert::success('Berhasil','Berhasil Mengganti Kategori!');
		return redirect()->route('kategori')->with('success','Berhasil Mengubah Kategori!');
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
            // Alert::success('Berhasil','Berhasil Menghapus Kategori!');
			} else{
				DB::table('produk')->where('id_kategori', $id)->update(['id_kategori' => 1]);
				$kategori = DB::table('kategori')->where('id', $id)->delete();
			// return response()->json(['message' => 'Maaf Kategori ini terdapat dalam tabel produk']);
		}
        return redirect()->route('kategori')->with('success','Berhasil Menghapus Kategori!');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $kategori = Kategori::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('layouts.admin.kategori.index', ['kategori' => $kategori])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
