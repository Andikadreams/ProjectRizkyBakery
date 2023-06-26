<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Rating;
use Barryvdh\DomPDF\PDF;
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
        $avg = Rating::where('produk_id', $produk->id)
            ->avg('rate');

        return view('layouts.user.pesan', compact('produk', 'avg'));
    }

    public function process(Request $request, $id)
    {
        if ($request->has('jumlah_pesan')) {
            $produk = Produk::where('id', $id)->first();
            $tanggal = Carbon::now();

            //validasi apakah melebihi jumlah
            if ($request->jumlah_pesan > $produk->jumlah) {
                return redirect('pesan/' . $id)->with('error', 'Maaf stok tidak mencukupi :(');
            }

            //cek validasi
            $cek_pesanan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            //simpan ke database order
            if (empty($cek_pesanan)) {
                $order = new Order;
                $order->user_id = Auth::user()->id;
                $order->tanggal = $tanggal;
                $order->status = 0;
                $order->jumlah_harga = 0;
                $order->kode = mt_rand(100, 999);
                $order->save();
            }


            //simpan ke database order detail
            $pesanan_baru = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

            //cek order detail
            $cek_pesanan_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();
            if (empty($cek_pesanan_detail)) {
                $order_detail = new OrderDetail;
                $order_detail->produk_id = $produk->id;
                $order_detail->order_id = $pesanan_baru->id;
                $order_detail->jumlah = $request->jumlah_pesan;
                $order_detail->jumlah_harga = $produk->harga * $request->jumlah_pesan;
                $order_detail->save();
            } else {
                $order_detail = OrderDetail::where('produk_id', $produk->id)->where('order_id', $pesanan_baru->id)->first();

                $order_detail->jumlah = $order_detail->jumlah + $request->jumlah_pesan;

                //harga sekarang
                $harga_pesanan_detail_baru = $produk->harga * $request->jumlah_pesan;
                $order_detail->jumlah_harga = $order_detail->jumlah_harga + $harga_pesanan_detail_baru;
                $order_detail->update();
            }

            //jumlah total
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $order->jumlah_harga = $order->jumlah_harga + $produk->harga * $request->jumlah_pesan;
            $order->update();


            return redirect('shop')->with('Success', 'Order Sukses Masuk Keranjang');
        } elseif ($request->has('rate')) {
            $produk = Produk::where('id', $id)->first();

            //validasi apakah rating lebih dari 5
            if ($request->rate > 5) {
                return redirect('pesan/' . $id)->with('error', 'Rating tidak boleh lebih dari 5');
            }

            //tambah ke table rating
            $cek_rating = Rating::where('user_id', Auth::user()->id)->where('produk_id', $produk->id)->first();

            if (empty($cek_rating)) {
                $rating = new Rating;
                $rating->user_id = Auth::user()->id;
                $rating->produk_id = $produk->id;
                $rating->rate = $request->rate;
                $rating->save();
            } elseif ($cek_rating->rate > 0) {
                $rating = Rating::where('user_id', Auth::user()->id)
                    ->update(['rate' => $request->rate]);
            }

            return redirect('pesan/' . $id)->with('success', 'Rate berhasil ditambahkan.');
        }
    }

    public function check_out()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_details = [];
        if (!empty($order)) {
            $order_details = OrderDetail::where('order_id', $order->id)->get();
        }

        return view('layouts.user.checkout', compact('order', 'order_details'));
    }

    public function delete($id)
    {
        $order_detail = OrderDetail::where('id', $id)->first();

        $order = Order::where('id', $order_detail->order_id)->first();
        $order->jumlah_harga = $order->jumlah_harga - $order_detail->jumlah_harga;
        $order->update();


        $order_detail->delete();

        return redirect('check-out')->with('Hapus', 'Order Sukses Dihapus');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $produk = Produk::where('id', $order_detail->produk_id)->first();
            $produk->jumlah = $produk->jumlah - $order_detail->jumlah;
            $produk->update();
        }

        return redirect('riwayat/' . $order_id)->with('success', 'Orer sukses silahkan lanjut ke pembayaran');
    }
}
