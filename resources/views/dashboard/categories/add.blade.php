@extends('dashboard.layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg bg-transparent">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4 text-white">Tambah Daftar Barang</h3>
                        </div>
                        <div class="card-body text-white">
                            <form action="/dashboard/categories" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="kategori_nama" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror" name="kategori_nama" id="kategori_nama" autofocus value="{{ old('kategori_nama') }}" required>
                                    @error('kategori_nama')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
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