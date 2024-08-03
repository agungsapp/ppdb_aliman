@extends('admin.layouts.main')
@section('content')
		<section class="container-fluid">
				<div class="row">
						<div class="col-12">
								{{-- card  --}}
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Data Brosur
												</div>
										</div>
										<form action="" method="post">
												<div class="card-body">

														<div class="row">
																<div class="col-6">
																		<x-input-text nama="judul">
																				Judul
																		</x-input-text>
																</div>
																<div class="col-6">
																		<x-input-text nama="deskripsi">
																				deskripsi
																		</x-input-text>
																</div>
																<div class="col-6">
																		<label for="formFile" class="form-label">Poster</label>
																		<input class="form-control" type="file" id="formFile">
																</div>

														</div>

												</div>
												<div class="card-footer">
														<button class="btn btn-primary">Simpan</button>
												</div>
										</form>
								</div>
						</div>
				</div>

				<div class="row mt-2">
						<div class="col-12">
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														brosur sekarang
												</div>
										</div>
										<div class="card-body">
												<div class="d-flex justify-content-center">
														<img class="img-fluid" src="{{ asset('web/banner/banner.jpeg') }}" alt="" srcset="">
												</div>
										</div>
								</div>
						</div>
				</div>
		</section>
@endsection
