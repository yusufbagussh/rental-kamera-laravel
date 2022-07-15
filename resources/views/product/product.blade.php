@extends('layout.main')
@section('content') 
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-4"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('img/' . $product->produk_gambar) }}" alt="..." /></div>
                <div class="col-md-8">
                    <h1 class="display-5 fw-bolder">{{ $product->produk_nama }}</h1>
                    <div class="fs-5 mb-3">
                        <span>Rp. {{ $product->produk_harga }}</span>
                    </div>
                    {{-- Product Category --}}
                    <p>Kategori : {{ $product->category->kategori_nama }}</p>
                    <p class="lead">{{ $product->produk_keterangan }}</p>
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <a class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                << Back</a>
                                    <!-- </div>
                        <div class="flex-shrink-0 text-center"> -->
                                    <a class="btn btn-outline-dark mt-auto" href="../sewa_barang/sewa_aksesoris.php?id={{ $product->produk_id }}">Sewa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
