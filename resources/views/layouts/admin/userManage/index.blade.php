@extends('layouts.admin.app')

@section('title', 'Data User')

@section('contents')

@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
    @php
    Session::forget('error');
    @endphp
</div>
@endif
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
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3 ml-3">Tambah User</a>
        <a class="btn btn-success right mb-3" href="{{ route('user') }}">Tampilkan Semua User</a>
        <!-- Topbar Search -->
        <form class="form-left my-2" method="get" action="{{ route('user.search') }}">
            <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                <input type="text" name="search" class="form-control w-50 d-inline" id="search"
                    placeholder="Masukkan Nama">
                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                <div class="input-group-append">
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <!-- <th width="150px">Foto Produk</th> -->
                        <!-- <th>Password</th> -->
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($data as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <!-- <td><img width="130px" src="{{asset('storage/'.$row->foto_produk)}}"></td> -->
                        <!-- <td>{{ $row->password }}</td> -->
                        <td>{{ $row->level }}</td>
                        <td>
                            @if($row->level == 'admin')
                            <a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning edit-button"
                                onclick="confirmationEdit(event)">Edit</a>
                            <a href="{{ route('user.destroy', $row->id) }}" class="btn btn-danger"
                                onclick="confirmationDel(event)">Hapus</a>
                            @elseif($row->level == 'pelanggan')
                            <a href="{{ route('user.destroy', $row->id) }}" class="btn btn-danger delete-button"
                                onclick="confirmationDel(event)">Hapus</a>
                            @elseif($row->level == 'owner')
                            <a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning edit-button"
                                onclick="confirmationEdit(event)">Edit</a>
                            <a href="{{ route('user.destroy', $row->id) }}" class="btn btn-danger"
                                onclick="confirmationDel(event)">Hapus</a>
                            @endif
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
