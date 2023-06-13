@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach($produk as $produks)
        <div class="col-md-4">
            <div class="card mb-5">
              <img src="{{ $produks->foto_produk }}" class="card-img-top mb-" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $produks->nama_produk }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($produks->harga)}} <br>
                    <strong>Stok :</strong> {{ $produks->jumlah }} <br>
                    <hr>
                    {{-- <strong>Keterangan :</strong> <br>
                    {{ $produks->keterangan }}  --}}
                </p>
                <a href="{{ url('pesan') }}/{{ $produks->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection