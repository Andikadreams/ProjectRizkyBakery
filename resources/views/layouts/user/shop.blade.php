@extends('layouts.app')

@section('content')
    {{-- manggil sweet alert --}}
    @include('sweetalert::alert')

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
            @php
                Session::forget('error');
            @endphp
        </div>
    @endif

    <div class="container">
        <form method="post" action="{{ url('shop') }}" class="mt-3">
            <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                @csrf
                <input type="text" name="cari" class="form-control" required="" placeholder="Masukkan Nama Produk">
                <button type="submit" class="btn btn-primary ml-2"><i class="bi bi-search"></i>Cari</button>
            </div>
        </form>

        <div class="row justify-content-center">
            <!-- <div class="col-md-12 mb-5">
                    <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
                </div> -->
            @foreach ($produk as $produks)
                <div class="col-md-4">
                    <div class="card mb-5">
                        <img src="{{ asset('storage/foto_produk/' . $produks->foto_produk) }}" class="card-img-top mb-"
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
                                        @if ($ratings->produk_id == $produks->id && $ratings->rate > 0)
                                            <p>Rating Kamu : {{ $ratings->rate }}</p>
                                        @elseif (empty($ratings))
                                            <p>Belum membri rating</p>
                                        @endif
                                    @endif
                                @endforeach
                            </p>
                            <a href="{{ route('pesan', ['id' => $produks->id]) }}" class="btn btn-primary"><i
                                    class="fa fa-shopping-cart"></i>Pesan</a>
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
