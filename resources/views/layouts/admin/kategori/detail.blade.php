@extends('layouts.admin.app')

@section('title', 'Kategori')

@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Kategori
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kategori: </b>{{$kategori->nama}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('kategori') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection