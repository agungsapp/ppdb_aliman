@extends('siswa.layouts.main')
@section('content')
		<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
				<div class="container">
						<div class="row align-items-end justify-content-center text-center">
								<div class="col-lg-7">
										<h2 class="mb-0">Upload</h2>
										<p>Upload Bukti pembayaran</p>
								</div>
						</div>
				</div>
		</div>



		<div class="custom-breadcrumns border-bottom">
				<div class="container">
						<a href="{{ route('siswa.pembayaran.index') }}">Pembayaran</a>
						<span class="icon-keyboard_arrow_right mx-3"></span>
						<span class="current">Upload Bukti Pembayaran</span>
				</div>
		</div>


		<div class="site-section">
				<div class="container">
						<div class="row justify-content-center">
								<div class="col-md-5">
										<form action="{{ route('siswa.pembayaran.store') }}" method="POST" enctype="multipart/form-data">
												@csrf
												{{-- nominal --}}
												<div class="mb-3">
														<label for="nominal" class="form-label">Nominal</label>
														<input type="number" value="{{ Auth::user()->hitungBayar(300000) }}" name="nominal"
																class="form-control @error('nominal') is-invalid @enderror" id="nominal"
																placeholder="masukan jumlah nominal" value="{{ old('nominal') }}">
														@error('nominal')
																<div class="invalid-feedback">{{ $message }}</div>
														@enderror
												</div>

												<div class="mb-3">
														<label for="bukti" class="form-label">Upload Bukti Pembayaran</label>
														<input class="form-control form-control-file @error('bukti') is-invalid @enderror" name="bukti"
																type="file" id="bukti">
														@error('bukti')
																<div class="invalid-feedback">{{ $message }}</div>
														@enderror
												</div>

												<button type="submit" class="btn btn-success text-white">Upload</button>

										</form>
								</div>
						</div>
				</div>
		</div>
@endsection
