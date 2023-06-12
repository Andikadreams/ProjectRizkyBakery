<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$produk = Produk::where('id', $id)->first();

    	return view('layouts.user.pesan', compact('produk'));
    }

    // public function pesan(Request $request, $id)
    // {	
    // 	$produk = Produk::where('id', $id)->first();
    // 	$tanggal = Carbon::now();

    // 	//validasi apakah melebihi jumlah
    // 	if($request->jumlah_pesan > $produk->jumlah)
    // 	{
    // 		return redirect('pesan/'.$id);
    // 	}

    // 	//cek validasi
    // 	$cek_pesanan = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    // 	//simpan ke database order
    // 	if(empty($cek_pesanan))
    // 	{
    // 		$order = new Order;
	//     	$order->user_id = Auth::user()->id;
	//     	$order->tanggal = $tanggal;
	//     	$order->status = 0;
	//     	$order->jumlah_harga = 0;
    //         $order->kode = mt_rand(100, 999);
	//     	$order->save();
    // 	}
    	

    // 	//simpan ke database order detail
    // 	$pesanan_baru = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

    // 	//cek order detail
    // 	$cek_pesanan_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();
    // 	if(empty($cek_pesanan_detail))
    // 	{
    // 		$order_detail = new OrderDetail;
	//     	$order_detail->produk_id = $produk->id;
	//     	$order_detail->order_id = $pesanan_baru->id;
	//     	$order_detail->jumlah = $request->jumlah_pesan;
	//     	$order_detail->jumlah_harga = $produk->harga*$request->jumlah_pesan;
	//     	$order_detail->save();
    // 	}else 
    // 	{
    // 		$order_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();

    // 		$order_detail->jumlah = $order_detail->jumlah+$request->jumlah_pesan;

    // 		//harga sekarang
    // 		$harga_pesanan_detail_baru = $produk->harga*$request->jumlah_pesan;
	//     	$order_detail->jumlah_harga = $order_detail->jumlah_harga+$harga_pesanan_detail_baru;
	//     	$order_detail->update();
    // 	}

    // 	//jumlah total
    // 	$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    // 	$order->jumlah_harga = $order->jumlah_harga+$produk->harga*$request->jumlah_pesan;
    // 	$order->update();
    	
    // 	return view('layouts.user.shop')->with('success', 'Order sukses masuk keranjang');

    // }

    public function pesan(Request $request, $id)
    {	
    	$produk = Produk::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi jumlah
    	if($request->jumlah_pesan > $produk->jumlah)
    	{
    		return redirect('pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database order
    	if(empty($cek_pesanan))
    	{
    		$order = new Order;
	    	$order->user_id = Auth::user()->id;
	    	$order->tanggal = $tanggal;
	    	$order->status = 0;
	    	$order->jumlah_harga = 0;
            $order->kode = mt_rand(100, 999);
	    	$order->save();
    	}
    	

    	//simpan ke database order detail
    	$pesanan_baru = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek order detail
    	$cek_pesanan_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$order_detail = new OrderDetail;
	    	$order_detail->produk_id = $produk->id;
	    	$order_detail->order_id = $pesanan_baru->id;
	    	$order_detail->jumlah = $request->jumlah_pesan;
	    	$order_detail->jumlah_harga = $produk->harga*$request->jumlah_pesan;
	    	$order_detail->save();
    	}else 
    	{
    		$order_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();

    		$order_detail->jumlah = $order_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $produk->harga*$request->jumlah_pesan;
	    	$order_detail->jumlah_harga = $order_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$order_detail->update();
    	}

    	//jumlah total
    	$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$order->jumlah_harga = $order->jumlah_harga+$produk->harga*$request->jumlah_pesan;
    	$order->update();
    	
        
    	return redirect('shop')->with('Success','Order Sukses Masuk Keranjang');

    }

    // public function check_out()
    // {
    //     $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
 	// $pesanan_details = [];
    //     if(!empty($order))
    //     {
    //         $pesanan_details = OrderDetail::where('order_id', $order->id)->get();

    //     }
        
    //     return view('pesan.check_out', compact('order', 'pesanan_details'));
    // }

    public function check_out()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
 	$order_details = [];
        if(!empty($order))
        {
            $order_details = OrderDetail::where('order_id', $order->id)->get();
        }
        
        return view('layouts.user.checkout', compact('order', 'order_details'));
    }
    
    public function delete($id)
    {
        $order_detail = OrderDetail::where('id', $id)->first();

        $order = Order::where('id', $order_detail->order_id)->first();
        $order->jumlah_harga = $order->jumlah_harga-$order_detail->jumlah_harga;
        $order->update();


        $order_detail->delete();

        return redirect('check-out')->with('Hapus', 'Order Sukses Dihapus');

    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        // if(empty($user->alamat))
        // {
            
        //     return redirect()->route('home')->with('error','Mohon lengkapi data diri');
        // }

        // if(empty($user->nohp))
        // {
        //     return redirect()->route('home')->with('error','Mohon lengkapi data diri');

        // }

        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $produk = Produk::where('id', $order_detail->produk_id)->first();
            $produk->jumlah = $produk->jumlah-$order_detail->jumlah;
            $produk->update();
        }


        return redirect('riwayat/'.$order_id)->with('success','Orer sukses silahkan lanjut ke pembayaran');

    }

    
}