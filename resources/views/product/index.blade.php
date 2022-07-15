@extends('layout.main')
@section('content') 
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <form action="/product" method="get">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Cari nama produk...">
                            <button class="btn btn-black text-white" type="submit" id="search">Search</button>
                          </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php $i = 1; ?>
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-head p-4" style="height:240px;" src="{{ asset('img/' . $product->produk_gambar) }}" />
                                <!-- Product details-->
                                <div class="card-body p-4 text-center">
                                    <!-- Product category-->
                                    <p>Kategori : <a href="/product?category={{ $product->category->kategori_id }}" style="text-decoration: none">{{ $product->category->kategori_nama }}</a></p>
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->produk_nama }}</h5>
                                    <!-- Product price-->
                                    <h6 class="fw-bolder">Rp. {{ $product->produk_harga }}</h6>
                                    <a href="/product?user={{ $product->user->user_id }}" style="text-decoration: none;">{{ $product->user->user_nama }}</a>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="product/{{ $product->produk_id }}">Detail</a>
                                    <a class="btn btn-outline-dark mt-auto" href="../sewa_barang/sewa_kamera.php?id={{ $product->produk_id }}">Sewa</a>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
@endSection