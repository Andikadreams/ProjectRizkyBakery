@extends('layouts.admin.app')

@section('title', 'Form Rekening')

@section('contents')
<form action="{{ isset($bank) ? route('rekening.create.update', $bank->id) : route('rekening.create.store') }}"
    method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ isset($bank) ? 'Form Edit Rekening' : 'Form Tambah Rekening' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nasabah">Nama Nasabah</label>
                        <input type="text" required="required" class="form-control" id="nasabah" name="nasabah"
                            value="{{ isset($bank) ? $bank->nasabah : '' }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_rekening">No. Rekening</label>
                        <input type="number" required="required" class="form-control" id="no_rekening" name="no_rekening"
                            value="{{ isset($bank) ? $bank->no_rekening : '' }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_bank">Nama Bank</label>
                        <input type="text" required="required" class="form-control" id="nama_bank" name="nama_bank"
                            value="{{ isset($bank) ? $bank->nama_bank : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('rekening') }}" class="btn btn-danger" role="button" aria-disabled="true" style="margin-left:5px">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
