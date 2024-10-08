@extends('admin.layouts.main');
@section('content')
		<div class="col-12 col-sm-6 col-xl-4 mb-4">
				<h2>Dashboard</h2>
		</div>
		<div class="row mt-4">
				{{-- guru --}}
				<div class="col-12 col-sm-6 col-xl-4 mb-4">
						<div class="card border-0 shadow">
								<div class="card-body">
										<div class="row d-block d-xl-flex align-items-center">
												<div class="col-12 col-xl-5 text-xl-center mb-xl-0 d-flex align-items-center justify-content-xl-center mb-3">
														<div class="icon-shape icon-shape-primary me-sm-0 me-4 rounded">
																<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<path
																				d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
																		</path>
																</svg>
														</div>
														<div class="d-sm-none">
																<h2 class="h5">Jumlah Calon Peserta</h2>
																<h3 class="fw-extrabold mb-1">{{ $siswa }}</h3>
														</div>
												</div>
												<div class="col-12 col-xl-7 px-xl-0">
														<div class="d-none d-sm-block">
																<h2 class="h6 mb-0 text-gray-400">Jumlah Calon Peserta</h2>
																<h3 class="fw-extrabold mb-2">{{ $siswa }}</h3>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				{{-- siswa --}}
				<div class="col-12 col-sm-6 col-xl-4 mb-4">
						<div class="card border-0 shadow">
								<div class="card-body">
										<div class="row d-block d-xl-flex align-items-center">
												<div class="col-12 col-xl-5 text-xl-center mb-xl-0 d-flex align-items-center justify-content-xl-center mb-3">
														<div class="icon-shape icon-shape-primary me-sm-0 me-4 rounded">
																<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<path
																				d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
																		</path>
																</svg>
														</div>
														<div class="d-sm-none">
																<h2 class="h5">Jenis Pengumuman</h2>
																<h3 class="fw-extrabold mb-1">{{ $pengumuman }}</h3>
														</div>
												</div>
												<div class="col-12 col-xl-7 px-xl-0">
														<div class="d-none d-sm-block">
																<h2 class="h6 mb-0 text-gray-400">Jenis Pengumuman</h2>
																<h3 class="fw-extrabold mb-2">{{ $pengumuman }}</h3>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				<div class="col-12 col-sm-6 col-xl-4 mb-4">
						<div class="card border-0 shadow">
								<div class="card-body">
										<div class="row d-block d-xl-flex align-items-center">
												<div class="col-12 col-xl-5 text-xl-center mb-xl-0 d-flex align-items-center justify-content-xl-center mb-3">
														<div class="icon-shape icon-shape-secondary me-sm-0 me-4 rounded">
																<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd"
																				d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
																				clip-rule="evenodd"></path>
																</svg>
														</div>
														<div class="d-sm-none">
																<h2 class="fw-extrabold h5">Sudah Melakukan Pembayaran</h2>
																<h3 class="mb-1">{{ $pembayaran }}</h3>
														</div>
												</div>
												<div class="col-12 col-xl-7 px-xl-0">
														<div class="d-none d-sm-block">
																<h2 class="h6 mb-0 text-gray-400">Sudah Melakukan Pembayaran</h2>
																<h3 class="fw-extrabold mb-2">{{ $pembayaran }}</h3>
														</div>

												</div>
										</div>
								</div>
						</div>
				</div>


				@if (Auth::user()->role != 'staff')
						<div class="col-12 col-sm-6 col-xl-4 mb-4">
								<div class="card border-0 shadow">
										<div class="card-body">
												<div class="row d-block d-xl-flex align-items-center">
														<div
																class="col-12 col-xl-5 text-xl-center mb-xl-0 d-flex align-items-center justify-content-xl-center mb-3">
																<div class="icon-shape icon-shape-tertiary me-sm-0 me-4 rounded">
																		<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																				<path fill-rule="evenodd"
																						d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
																						clip-rule="evenodd"></path>
																		</svg>
																</div>
																<div class="d-sm-none">
																		<h2 class="fw-extrabold h5"> Jumlah Staff</h2>
																		<h3 class="mb-1">{{ $staff }}</h3>
																</div>
														</div>
														<div class="col-12 col-xl-7 px-xl-0">
																<div class="d-none d-sm-block">
																		<h2 class="h6 mb-0 text-gray-400"> Jumlah Staff</h2>
																		<h3 class="fw-extrabold mb-2">{{ $staff }}</h3>
																</div>

														</div>
												</div>
										</div>
								</div>
						</div>
				@endif

		</div>
@endsection
