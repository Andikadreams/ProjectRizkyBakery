<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use Barryvdh\DomPDF\PDF;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PesananController extends Controller
{
    public function index(Request $request){
        $keyword = $request->search;
        $orderDetail = OrderDetail::with('order')
                                ->where('order_id', 'LIKE', $keyword)
                                ->orWhereHas('order', function($query) use($keyword) {
                                    $query->where('tanggal','LIKE', $keyword);
                                })->orWhereHas('order', function($query) use($keyword) {
                                    $query->where('tanggal','LIKE', $keyword);
                                })
                                ->paginate(5);
        return view('layouts.admin.pesanan.index',compact('orderDetail'));     
    }

    public function indexPenjualan(Request $request){
        $keyword = $request->search;
        $count_penjualan = OrderDetail::sum('jumlah_harga');
        $orderDetail = OrderDetail::with('order')
                                ->where('order_id', 'LIKE', $keyword)
                                ->orWhereHas('order', function($query) use($keyword) {
                                    $query->where('tanggal','LIKE', $keyword);
                                })->orWhereHas('order', function($query) use($keyword) {
                                    $query->where('tanggal','LIKE', $keyword);
                                })
                                ->paginate(5);
        return view('layouts.admin.laporan.index',compact('orderDetail','count_penjualan'));     
    }

    public function cetakPertanggal($start_date, $end_date){
        $start_datetime = $start_date . ' 00:00:00';
        $end_datetime = $end_date . ' 23:59:59';
        $orderDetail = OrderDetail::with('order')->whereBetween('created_at',[$start_datetime, $end_datetime])->get();
        $view = View::make('layouts.admin.laporan.cetakpertanggal', compact('orderDetail'));
        $html = $view->render();

        $pdf = app(PDF::class);
        $pdf->loadHTML($html);

        return $pdf->stream('Laporan-Penjualan-pertanggal.pdf');
    }


    public function show($id){
        $orderDetail = OrderDetail::find($id);
        return view('layouts.admin.pesanan.detail', compact('orderDetail'));
    }

    // public function laporanPenjualan(){
    //     $count_penjualan= OrderDetail::sum('jumlah_harga');
    //     $orderDetail = OrderDetail::with('order')->paginate(5);
    //     return view('layouts.admin.laporan.index',compact('orderDetail', 'count_penjualan'));
    // }

    public function cetakLaporan(){

        $orderDetail = OrderDetail::get();

        $view = View::make('layouts.admin.laporan.cetak', compact('orderDetail'));
        $html = $view->render();

        $pdf = app(PDF::class);
        $pdf->loadHTML($html);

        return $pdf->stream('Laporan-Penjualan.pdf');
    }
    
    
}
