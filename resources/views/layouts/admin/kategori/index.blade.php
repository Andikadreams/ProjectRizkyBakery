@extends('layouts.admin.app')

@section('title', 'Kategori')

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
@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
    @php
    Session::forget('error');
    @endphp
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        <a class="btn btn-success right mb-3" href="{{ route('kategori') }}">Semua Kategori</a>
        <div class="table-responsive">
            <form class="form-left my-2" method="get" action="{{ route('kategori.search') }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control w-50 d-inline" id="search"
                        placeholder="Masukkan Nama">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    <div class="input-group-append">
                    </div>
                </div>
            </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th width="250px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $row)
                    <tr>
                        @php($tmp = $row->id)
                        @if ($tmp != 1)
                        <td>{{ $row->nama }}</td>
                        <td>
                            <a href="{{ route('kategori.detail', $row->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning"
                                onclick="confirmationEdit(event)">Edit</a>
                            <a href="{{ route('kategori.destroy', $row->id) }}" class="btn btn-danger"
                                onclick="confirmationDel(event)">Hapus</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$kategori->links('pagination::bootstrap-5')}}
        </div>
    </div>
</div>
@endsection
