@extends('layouts.app')

@section('content')

{{-- manggil sweet alert --}}
@include('sweetalert::alert')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
    Session::forget('success');
    @endphp
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
    @php
    Session::forget('error');
    @endphp
</div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('shop') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $produk->nama_produk }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/foto_produk/'.$produk->foto_produk) }}" class="rounded mx-auto d-block" width="100%"
                                    alt=""
                                    style="height: 350px; object-fit: cover; width: 70%; object-position:bottom">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2>{{ $produk->nama_produk }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($produk->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rating Average</td>
                                            <td>:</td>
                                            <td>{{ ($avg) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{ number_format($produk->jumlah) }}</td>
                                        </tr>  
                                        {{-- <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $produk->keterangan }}</td>
                                        </tr> --}}

                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <form method="post" action="{{ route('process', ['id'=>$produk->id]) }}">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control"
                                                        required="" placeholder="Masukkan Quantity">
                                                    <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rating</td>
                                            <td>:</td>
                                            <td>
                                                <form method="post" action="{{ route('process', ['id'=>$produk->id]) }}" >
                                                    @csrf
                                                    <input type="text" name="rate" class="form-control"
                                                        required="" placeholder="Masukkan Rating 1-5 (Edit Rating disini)">
                                                    <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="bi bi-star"></i> Beri Rating </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
