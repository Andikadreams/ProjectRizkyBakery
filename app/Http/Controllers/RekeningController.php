<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::paginate(5);
		return view('layouts.admin.rekening.index', ['bank' => $bank]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('layouts.admin.rekening.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateKode = Bank::where('no_rekening', $request->no_rekening)->first();
        if ($validateKode) {
            return redirect()->route('rekening')->with('error', 'No. Rekening Tidak Boleh Sama!');
        } else {
            Bank::create(['nasabah' => $request->nasabah,'nama_bank' => $request->nama_bank,'no_rekening' => $request->no_rekening]);
            return redirect()->route('rekening')->with('success', 'Berhasil Menambah Data Rekening!');
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
        $bank = Bank::find($id);
        return view('layouts.admin.rekening.detail', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::find($id);
		return view('layouts.admin.rekening.edit', ['bank' => $bank]);
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
        $bank = Bank::find($id);
        $validateKode = Bank::where('no_rekening', $request->no_rekening)
            ->where('id', '!=', $id)
            ->exists();
        $data = [
			'nasabah' => $request->nasabah,
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
		];
        if ($bank->no_rekening == $request->no_rekening && $bank->nama_bank == $request->nama_bank 
        && $bank->nasabah == $request->nasabah) {
            return redirect()->route('rekening')->with('info', 'Tidak Ada Perubahan Pada Data Rekening.');
        } 
        else if ($validateKode) {
            return redirect()->route('rekening')->with('error', 'No. Rekening Tidak Boleh Sama!');
        } else {
                Bank::find($id)->update($data);
                return redirect()->route('rekening')->with('success', 'Berhasil Mengedit Data Rekening!');
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
        Bank::find($id)->delete();
		return redirect()->route('rekening')->with('success','Berhasil Menghapus Data Rekening');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $bank = Bank::where('nasabah', 'like', "%" . $keyword . "%")
            ->orWhere('no_rekening', 'like', "%" . $keyword . "%")
            ->orWhere('nama_bank', 'like', "%" . $keyword . "%")
            ->paginate(5);
        return view('layouts.admin.rekening.index', ['bank' => $bank])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
