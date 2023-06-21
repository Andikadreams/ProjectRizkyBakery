@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ url('shop') }}" class="mt-3">
            @csrf
            <input type="text" name="cari" class="form-control" required="">
            <button type="submit" class="btn btn-primary mt-1"><i class="bi bi-search"></i>Cari</button>
        </form>
        <div class="row justify-content-center">
            <!-- <div class="col-md-12 mb-5">
                <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
            </div> -->
            @foreach ($produk as $produks)
                <div class="col-md-4">
                    <div class="card mb-5">
                    <img src="{{ asset('storage/' .$produks->foto_produk) }}" class="card-img-top mb-"
                            style="height: 300px; object-fit: cover; width: 100%; object-position:bottom" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produks->nama_produk }}</h5>
                            <p class="card-text">
                                <strong>Harga :</strong> Rp. {{ number_format($produks->harga) }} <br>
                                <strong>Stok :</strong> {{ $produks->jumlah }} <br>
                                <hr>
                                {{-- <strong>Keterangan :</strong> <br>
                                {{ $produks->keterangan }}  --}}
                                @foreach ($rating as $ratings)
                                @if ($ratings->user_id == Auth::user()->id)
                                    @if ($ratings->produk_id == $produks->id)
                                        
                                    <p>Your Rating : {{ $ratings->rate }}</p>
                                    {{-- <p>Komentar: {{ $review->comment }}</p> --}}
                                    @endif
                                @endif                                  
                                @endforeach
                            </p>
                            <a href="{{ url('pesan') }}/{{ $produks->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex" style="justify-content: center">
                {!! $produk->links() !!}
            </div>
    </div>
@endsection
