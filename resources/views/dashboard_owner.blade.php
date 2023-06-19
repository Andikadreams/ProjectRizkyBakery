@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('contents')

<h4>{{ Auth::user()->name }}
</h4>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{route('produk')}}">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Account Pelanggan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_pelanggan}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection
