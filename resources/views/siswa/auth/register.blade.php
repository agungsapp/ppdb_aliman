@extends('siswa.layouts.main')
@section('content')
		<!-- start -->
		<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
				<div class="container">
						<div class="row align-items-end justify-content-center text-center">
								<div class="col-lg-7">
										<h2 class="mb-0">Register</h2>
										<p>Silahkan buat akun terlebih dahulu untuk melakukan login.</p>
								</div>
						</div>
				</div>
		</div>


		<div class="custom-breadcrumns border-bottom">
				<div class="container">
						<a href="index.html">Home</a>
						<span class="icon-keyboard_arrow_right mx-3"></span>
						<span class="current">Register</span>
				</div>
		</div>

		<div class="site-section">
				<div class="container">


						<div class="row justify-content-center">
								<div class="col-md-5">
										<div class="row">
												<div class="col-md-12 form-group">
														<label for="username">Username</label>
														<input type="text" id="username" name="username" class="form-control form-control-lg">
												</div>
												<div class="col-md-12 form-group">
														<label for="email">Email</label>
														<input type="email" id="email" name="email" class="form-control form-control-lg">
												</div>
												<div class="col-md-12 form-group">
														<label for="pword">Password</label>
														<input type="password" id="pword" name="password" class="form-control form-control-lg">
												</div>
												<div class="col-md-12 form-group">
														<label for="pword2">Re-type Password</label>
														<input type="password" id="pword2" name="confirm_password" class="form-control form-control-lg">
												</div>
										</div>
										<div class="row">
												<div class="col-12">
														<input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
												</div>
										</div>
								</div>
						</div>



				</div>
		</div>
@endsection
