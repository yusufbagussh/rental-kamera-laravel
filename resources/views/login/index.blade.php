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
	<title>Halaman Login</title>
</head>

<body>

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
										<h3 class="text-center font-weight-light my-4 text-white">Login</h3>
									</div>
									<div class="card-body">
                                        {{-- Apabila Login Sukses --}}
                                        @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        {{-- Apabila Login Gagal --}}
                                        @if(session()->has('loginError'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif

										<form action="{{ url('/login') }}" method="POST">
                                            @csrf
											<div class="form-floating mb-3">
												<input class="form-control @error('user_email') is-invalid @enderror" name="user_email" id="user_email" type="text" />
												<label for="user_email" class="form-label">Email</label>
												@error('user_email')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
											</div>
											<div class="form-floating mb-3">
												<input class="form-control @error('user_password') is-invalid @enderror" name="user_password" id="user_password" type="password" />
												<label for="user_password" class="form-label">Password</label>
												@error('user_password')
												<div class="invalid-feedback">
												{{ $message }}
												</div>
												@enderror
											</div>
											<div class="form-floating mb-3">
												<div class="d-flex align-items-center justify-content-center mt-4 mb-0">
													<button class="btn btn-primary" type="submit" name="login">Login</button>
												</div>
												<div class="card-footer text-center text-white py-3">
													<a href="{{ url('/register') }}" div class="text-reset">Need an account? Sign up!</a>
												</div>
											</div>
										</form>

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
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="dashboard/js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>