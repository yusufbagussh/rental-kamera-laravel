@extends('dashboard.layouts.main')
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Member</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Produk</li>
                    </ol>
                    @if (session()->has('success'))
                    <div class="alert alert-success col-lg-10" role="alert">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div class="container bg-black">
                        <a class="btn btn-primary" href="/dashboard/products/create" role="button">Tambahkan Data</a>
                        <a class="btn btn-primary" href="../../cetak_data/cetak_kamera.php" role="button" target="_blank">Cetak</a>
                    </div>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 bg-black">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-white text-center">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Keterangan</th>
                                            <th>Gambar</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @php
                                            $i = 1
                                        @endphp
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $product->produk_nama }}</td>
                                            <td>{{ $product->category->kategori_nama }}</td>
                                            <td>{{ $product->produk_harga }}</td>
                                            <td>{{ $product->produk_keterangan }}</td>
                                            <td><img src="{{ asset('storage/' . $product->produk_gambar) }}" width="100"></td>
                                            <td class="aksi">
                                                <a href="/dashboard/products/{{ $product->produk_id }}" class="btn btn-outline-white">Detail</a>
                                                <a href="/dashboard/products/{{ $product->produk_id }}/edit" class="btn btn-outline-white">Edit</a>
                                                <form action="/dashboard/products/{{ $product->produk_id }}" method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-outline-white" onclick="return confirm('Are you sure???')">Hapus</button>
                                                  </form>
                                            </td>
                                        </tr>
                                        @php
                                            $i++
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer bg-black small text-center text-white-50">
                <div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
            </footer>
        </div>
    </div>
@endsection
