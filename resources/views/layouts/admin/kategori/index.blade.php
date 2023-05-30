@extends('layouts.admin.app')

@section('title', 'Data Kategori')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($kategori as $row)
                    <tr>
                    @php($tmp = $row->id)
                    @if ($tmp != 1)
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('kategori.destroy', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
