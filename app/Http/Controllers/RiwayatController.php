<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Order;
use App\Models\Produk;
use App\Models\OrderDetail;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$order = Order::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();
        $bank = Bank::get();

    	return view('layouts.user.riwayat', compact('order', 'bank'));
    }

    public function detail($id)
    {
        $produk = Produk::get();
    	$order = Order::where('id', $id)->first();
    	$order_details = OrderDetail::where('order_id', $order->id)->get();

     	return view('layouts.user.detailRiwayat', compact('order','order_details','produk'));
    }

    
    
    // public function nota(){
    //     $order_detail = OrderDetail::all();
    //     $pdf = PDF::loadview('layouts.user.nota', ['order_detail'=>$order_detail]);
    //     return $pdf->stream();
    // }

    // public function nota($id){

    // 	$order = Order::where('id', $id)->first();
    // 	$order_details = OrderDetail::where('order_id', $order->id)->get();
    //     $produk = Produk::get();

    //     $view = View::make('layouts.user.nota', compact('order_details','order', 'produk'));
    //     $html = $view->render();

    //     $pdf = app(PDF::class);
    //     $pdf->loadHTML($html);

    //     return $pdf->stream('nota.pdf');
    // }

    public function exportToPDF($id)
{
    $produk = Produk::get();
    $order = Order::find($id);

    if ($order) {
        $order_details = OrderDetail::where('order_id', $order->id)->get();
        $view = View::make('layouts.user.nota', compact('order_details','order'));
        $html = $view->render();

        $pdf = app(PDF::class);
        $pdf->loadHTML($html);

        return $pdf->stream('nota.pdf');
    } else {
        abort(404);
    }
}
}