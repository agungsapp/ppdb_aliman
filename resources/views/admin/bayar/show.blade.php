@extends('admin.layouts.main')
@section('content')
		<div class="row mb-5">
				<div class="col-12">
						<div>
								<button type="button" class="btn btn_cetak btn-info">cetak bukti pembayaran</button>
						</div>
				</div>
		</div>
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<div class="row">
												<div class="col-4 p-5">
														<img src="{{ asset('web/logo/logo.png') }}" class="w-50" alt="logo.png" srcset="">
												</div>
												<div class="col-8">
														<div class="row">
																<h3 class="">{{ $sekolah->nama }}</h3>
														</div>
														<div class="row">
																<h5>{{ $sekolah->alamat }}</h5>
														</div>
												</div>
										</div>
										<hr>
										<div class="row">
												<h3 class="text-center">Bukti Pembayaran</h3>
										</div>
										<hr>

										<div class="row">
												<div class="col-6">
														<table>
																<tbody>
																		<tr>
																				<td>No. Transaksi :</td>
																				<td>{{ $pembayaran->kode_transaksi }}</td>
																		</tr>
																		<tr>
																				<td>Tanggal Pendaftaran :</td>
																				<td>{{ $pembayaran->user->created_at }}</td>
																		</tr>
																		<tr>
																				<td>Nama Siswa :</td>
																				<td>{{ $pembayaran->user->nama }}</td>
																		</tr>
																</tbody>
														</table>
												</div>
										</div>

										<div class="row">
												<div class="col-12">
														<table class="table">
																<thead>
																		<tr>
																				<th scope="col">No.</th>
																				<th scope="col">Nominal</th>
																				<th scope="col">Tanggal Pembayaran</th>

																		</tr>
																</thead>
																<tbody>
																		<tr>
																				<th scope="row">1</th>
																				<td>{{ $pembayaran->nominal }}</td>
																				<td>{{ $pembayaran->created_at }}</td>
																		</tr>
																</tbody>
														</table>
												</div>
										</div>



								</div>
						</div>
				</div>
		</div>
@endsection


@push('script')
		<script>
				$(document).ready(function() {
						$('.btn_cetak').on('click', function(e) {
								e.preventDefault();
								window.print()
						})
				})
		</script>
@endpush
