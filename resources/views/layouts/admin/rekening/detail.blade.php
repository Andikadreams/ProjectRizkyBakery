@extends('layouts.admin.app')

@section('title', 'Rekening')

@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Rekening
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Nasabah: </b>{{$bank->nasabah}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No. Rekening: </b>{{$bank->no_rekening}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Bank: </b>{{$bank->nama_bank}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('rekening') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection