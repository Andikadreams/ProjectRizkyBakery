@extends('layouts.admin.app')

@section('title', 'Profile')

@section('contents')
<section class="vh-50" style="background-color: #f4f5f7;">
    <div class="container py-5 h-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="{{asset('storage/'.auth()->user()->foto)}}"
                                alt="Avatar" class="img-fluid my-5" style="width: 100px;object-fit:cover;height:auto;border-radius:50%;overflow:hidden;">
                            <h5>{{ auth()->user()->name }}</h5>
                            <p>{{ auth()->user()->level }}</p>
                            <?php
                                $tmp = auth()->user()->id
                            ?>
                            <!-- @if(Auth::user()->level == 'admin')
                            <a href="{{route ('profile.create.edit',Auth::user()->id)}}">
                            <i class="far fa-edit mb-5">Edit</i>
                            </a>
                            <a href="{{route('dashboard')}}">
                            <i class="far fa-edit mb-5" style="margin-left: 5px;">Back</i>
                            </a>
                            @endif -->

                            @if(Auth::user()->level == 'pelanggan')
                            <a href="{{route ('profile.create.edit.pelanggan',Auth::user()->id)}}">
                            <i class="far fa-edit mb-5">Edit</i>
                            </a>
                            <a href="{{route('home')}}">
                            <i class="far fa-edit mb-5" style="margin-left: 5px;">Back</i>
                            </a>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6><b>Information</b></h6>
                                <hr class="mt-0 mb-1">
                                <div class="row pt-1">

                                    <div class="col-7 mb-2 mt-2">
                                        <h6>Nama</h6>
                                        <p class="text mb-2">{{ auth()->user()->name }}</p>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <h6>Email</h6>
                                        <p class="text">{{ auth()->user()->email }}</p>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <h6>Alamat</h6>
                                        <p class="text">{{ auth()->user()->alamat }}</p>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <h6>No Handphone</h6>
                                        <p class="text">{{ auth()->user()->no_hp }}</p>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <h6>Tanggal Lahir</h6>
                                        <p class="text">{{ auth()->user()->tgl_lahir }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
