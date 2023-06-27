@extends('layouts.admin.app')

@section('title', 'Rekening')

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

@if(Session::has('info'))
<div class="alert alert-info">
    {{ Session::get('info') }}
    @php
    Session::forget('info');
    @endphp
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rekening</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('rekening.create') }}" class="btn btn-primary mb-3 ml-3">Tambah Rekening</a>
        <a class="btn btn-success right mb-3" href="{{ route('rekening') }}">Semua Rekening</a>
        <div class="table-responsive">
            <form class="form-left my-2" method="get" action="{{ route('rekening.search') }}">
                <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                    <input type="text" name="search" class="form-control w-50 d-inline" id="search"
                        placeholder="Masukkan Pencarian">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    <div class="input-group-append">
                    </div>
                </div>
            </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nasabah</th>
                        <th>No Rekening</th>
                        <th>Bank</th>
                        <th width="250px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bank as $row)
                    <tr>
                        <td>{{ $row->nasabah}}</td>
                        <td>{{ $row->no_rekening }}</td>
                        <td>{{ $row->nama_bank }}</td>
                        <td>
                            <a href="{{ route('rekening.detail', $row->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('rekening.edit', $row->id) }}" class="btn btn-warning"
                                onclick="confirmationEdit(event)">Edit</a>
                            <a href="{{ route('rekening.destroy', $row->id) }}" class="btn btn-danger"
                                onclick="confirmationDel(event)">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$bank->withQueryString()->links('pagination::bootstrap-5')}}
        </div>
    </div>
</div>
@endsection
