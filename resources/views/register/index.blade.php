<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link href="dashboard/css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="index/assets/favicon.ico" />
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>

<body>
	<div id="layoutAuthentication">
		<style type="text/css">
			#layoutAuthentication {
				background-image: url("dashboard/p.jpg");
				background-size: cover;
			}
		</style>
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4 text-white">Membuat Akun Anda</h3>
								</div>
								<div class="card-body">
									<form action="/register" method="POST" enctype="multipart/form-data">
										@csrf
                                        {{-- nilai value 2 apabila dia member --}}
                                        <input type="hidden" id="user_role" name="user_role" value="2">
                                        <div class="form-floating mb-3">
											<input class="form-control @error('user_nama') is-invalid @enderror" name="user_nama" id="user_nama" type="text" required>
											<label for="user_nama" class="form-label">Nama</label>
											@error('user_nama')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
											@enderror
										</div>
										<div class="form-floating mb-3">
											<input class="form-control @error('user_email') is-invalid @enderror" name="user_email" id="user_email" type="text" required>
											<label for="user_email" class="form-label">Email</label>
											@error('user_email')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
										</div>
										<div class="form-floating mb-3">
                                            <input class="form-control @error('user_password') is-invalid @enderror" name="user_password" id="user_password" type="password" required>
											<label for="user_password" class="form-label">Password</label>
											@error('user_password')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
										</div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('user_tempat_lahir') is-invalid @enderror" name="user_tempat_lahir" id="user_tempat_lahir" type="text" required>
                                            <label for="user_tempat_lahir" class="form-label">Tempat Lahir</label>
											@error('user_tempat_lahir')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('user_tgl_lahir') is-invalid @enderror" name="user_tgl_lahir" id="user_tgl_lahir" type="date" required>
                                            <label for="user_tgl_lahir" class="form-label">Tanggal Lahir</label>
											@error('user_tgl_lahir')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('user_alamat') is-invalid @enderror" name="user_alamat" id="user_alamat" type="text" required>
                                            <label for="user_alamat" class="form-label">Alamat</label>
											@error('user_alamat')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
                                        </div>
                                        <div class="form-floating mb-3">
											<select class="form-select @error('user_gender') is-invalid @enderror" type="text" name="user_gender" id="user_gender" aria-label="Default select example">
												<option selected>Open this select menu</option>
                                                <option value="Laki - laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
											<label for="user_gender" class="form-label">Jenis Kelamin</label>
											@error('user_gender')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
                                        </div>
                                        <div class="form-floating mb-3">
											<input class="form-control @error('user_gambar') is-invalid @enderror" type="file" name="user_gambar" id="gambar" onchange="previewImage()">
											<label for="user_gambar" class="form-label">Foto Profil</label>
											<img class="img-preview img-fluid mt-3 col-sm-5">
                                            @error('user_gambar')
                                            <div class="invalid-feedback">
												{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
										<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
											<button class="btn btn-primary" type="submit" name="register">Register</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	</main>
	</div>
	<div id="layoutAuthentication_footer">
		<footer class="py-4 bg-dark mt-auto">
			<div class="container-fluid px-4">
				<div class="d-flex align-items-center">
					<footer class="footer bg-black small text-center text-white-50">
						<div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
					</footer>
				</div>
			</div>
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
        
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="dashboard/js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>