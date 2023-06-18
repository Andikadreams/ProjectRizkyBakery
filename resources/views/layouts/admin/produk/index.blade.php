@extends('layouts.admin.app')

@section('title', 'Produk')

@section('contents')
@include('sweetalert::alert')

@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        @if (auth()->user()->level == 'admin')
        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
        <a class="btn btn-success right mb-3" href="{{ route('produk') }}">Semua Produk</a>
        @endif
        <form class="form-left my-2"
            method="get" action="{{ route('produk.search') }}">
            
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th width="150px">Foto Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->kode_produk }}</td>
                        <td>{{ $row->nama_produk }}</td>
                        <td><img width="130px" src="{{asset('storage/'.$row->foto_produk)}}"></td>
                        <td>{{ $row->kategori->nama }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->jumlah }}</td>
                        <td>
                            <a href="{{ route('produk.detail', $row->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning edit-button edit-button"
                                onclick="confirmationEdit(event)">Edit</a>
                            <a href="{{ route('produk.destroy', $row->id) }}" class="btn btn-danger delete-button"
                                onclick="confirmationDel(event)">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="my-2" width="500px">
                {{$data->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection
