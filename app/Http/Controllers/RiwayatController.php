<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderDetail;
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

    	return view('layouts.user.riwayat', compact('order'));
    }

    public function detail($id)
    {
    	$order = Order::where('id', $id)->first();
    	$order_details = OrderDetail::where('order_id', $order->id)->get();

     	return view('layouts.user.detailRiwayat', compact('order','order_details'));
    }
}