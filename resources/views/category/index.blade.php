@extends('layout.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 text-center" id="home"><b>Kategori</b></h1>
            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach ($categories as $category)                            
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Daftar {{ $category->kategori_nama }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" style="text-decoration: none" href="/product?category={{ $category->kategori_id }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <img class="img-fluid mb-4" src="index/assets/img/camera.jpg" />
            </div>
        </div>
    </main>
</div>
@endSection