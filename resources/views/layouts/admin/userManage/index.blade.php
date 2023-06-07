@extends('layouts.admin.app')

@section('title', 'Data User')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
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
                            <a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('user.destroy', $row->id) }}" class="btn btn-danger">Hapus</a>
                            @elseif($row->level == 'pelanggan')
                            <a href="{{ route('user.destroy', $row->id) }}" class="btn btn-danger">Hapus</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
