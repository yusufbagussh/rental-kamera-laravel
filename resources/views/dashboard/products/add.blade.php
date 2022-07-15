@extends('dashboard.layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg bg-transparent">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4 text-white">Tambah Data Produk</h3>
                        </div>
                        <div class="card-body text-white">
                            <form action="/dashboard/products" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="produk_nama" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control @error('produk_nama') is-invalid @enderror" name="produk_nama" id="produk_nama" autofocus value="{{ old('produk_nama') }}" required>
                                    @error('produk_nama')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="produk_harga" class="form-label">Harga Sewa</label>
                                    <input type="number" class="form-control @error('produk_harga') is-invalid @enderror" name="produk_harga" id="produk_harga" value="{{ old('produk_harga') }}" required>
                                    @error('produk_harga')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="produk_keterangan" class="form-label">Keterangan</label>
                                    <textarea name="produk_keterangan" class="form-control @error('produk_keterangan') is-invalid @enderror" id="produk_keterangan" cols="47" rows="10">{{ old('produk_keterangan') }}</textarea>
                                    @error('produk_keterangan')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="produk_kategori" class="form-label">Kategori Produk</label>
                                    <select class="form-select @error('produk_kategori') is-invalid @enderror" type="text" name="produk_kategori" id="produk_kategori" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($categories as $category)
                                        @if (old('kategori_id') == $category->kategori_id)
                                          <option value="{{ $category->kategori_id }}" selected>{{ $category->kategori_nama }}</option>  
                                        @else
                                          <option value="{{ $category->kategori_id }}">{{ $category->kategori_nama }}</option> 
                                        @endif
                                        @endforeach  
                                    </select>
                                    @error('produk_kategori')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="produk_status" class="form-label">Status</label>
                                    <select class="form-select @error('produk_status') is-invalid @enderror"" type="text" name="produk_status" id="produk_status" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @if (old('produk_status') == 'Tersedia')
                                        <option value="Tersedia" selected>Tersedia</option>
                                        @elseif(old('produk_status') == 'Tidak Tersedia')
                                        <option value="Tidak Tersedia" selected>Tidak Tersedia</option>
                                        @endif
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                                    </select>
                                    @error('produk_status')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="produk_gambar" class="form-label">Image Post</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input class="form-control @error('produk_gambar') is-invalid @enderror" type="file" name="produk_gambar" id="gambar" onchange="previewImage()">
                                    @error('produk_gambar')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                  </div>
                                <input type="hidden" name="produk_user" id="produk_user" value="1">
                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <button class="btn btn-primary" button type="submit" name="submit">Tambah Data</button>
                                </div>
                            </form>
                        </div>
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

<script>
function previewImage(){
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
}
</script>

@endsection