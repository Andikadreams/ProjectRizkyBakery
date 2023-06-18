@extends('layouts.admin.app')

@section('title', 'Form Edit Profile')

@section('contents')

<?php
    $tmp = auth()->user()->id;
?>
<script type="text/javascript">
    // Data Picker Initialization
$('.datepicker').datepicker({
inline: true
});
</script>
<form action="{{ route('profile.create.edit',Auth::user()->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Profile</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" required="required" id="alamat" name="alamat"
                            value="{{ isset($user) ? $user->alamat : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="text" class="form-control" required="required" id="no_hp" name="no_hp"
                            value="{{ isset($user) ? $user->no_hp : '' }}">
                    </div>

                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
