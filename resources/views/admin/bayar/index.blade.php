@extends('admin.layouts.main')

@section('content')
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-header">
										<div class="card-title">
												Data Pembayaran Calon Peserta Didik
										</div>
								</div>
								<div class="card-body">
										<div class="table-responsive">
												<table class="table-hover table-rounded table-striped gy-7 gs-7 table border">
														<thead>
																<tr class="fw-semibold fs-6 border-bottom-2 border-gray-200 text-gray-800">
																		<th>No.</th>
																		<th>Nama</th>
																		<th>Nominal</th>
																		<th>Email</th>
																		<th>Tanggal Pembayaran</th>
																		<th>Bukti</th>
																		<th>Verifikasi</th>
																		<th>Aksi</th>
																</tr>
														</thead>
														<tbody>
																@foreach ($pembayarans as $pembayaran)
																		<tr class="items-center">
																				<td>{{ $loop->iteration }}</td>
																				<td>{{ $pembayaran->user->nama }}</td>
																				<td>{{ Str::rupiah($pembayaran->nominal) }}</td>
																				<td>{{ $pembayaran->user->email }}</td>
																				<td>{{ $pembayaran->created_at->isoFormat('D MMMM YYYY, HH.mm') }}</td>
																				<td>
																						@if ($pembayaran->path)
																								<a href="{{ asset('storage/upload/bukti/' . $pembayaran->path) }}" data-lightbox="gambar-saya"
																										data-title="Bukti Pembayaran">
																										<img width="50" src="{{ asset('storage/upload/bukti/' . $pembayaran->path) }}"
																												alt="Bukti Pembayaran">
																								</a>
																						@else
																								<span>Bukti pembayaran tidak tersedia</span>
																						@endif
																				</td>
																				<td>
																						<div class="form-check form-switch">
																								<input class="form-check-input toggle_verifikasi"
																										data-url="{{ route('updateStatus', $pembayaran->id) }}"
																										{{ $pembayaran->status_pembayaran ? 'checked disabled' : '' }} type="checkbox"
																										id="flexSwitchCheckDefault">
																								<label class="form-check-label" for="flexSwitchCheckDefault">Verifikasi</label>
																						</div>
																				</td>
																				<td>
																						<a href="{{ route('admin.pembayaran.show', $pembayaran->id) }}"
																								class="d-block btn btn-info">cetak</a>
																				</td>
																		</tr>
																@endforeach
														</tbody>
												</table>
										</div>
								</div>
						</div>

				</div>
		</div>
@endsection


@push('script')
		<script>
				$(document).ready(function() {
						$('.delete-button').on('click', function(event) {
								event.preventDefault();

								const form = $(this).closest('form');

								Swal.fire({
										title: 'Yakin Hapus ?',
										text: 'Anda tidak akan dapat membatalkan ini!',
										icon: 'warning',
										showCancelButton: true,
										confirmButtonColor: '#3085d6',
										cancelButtonColor: '#d33',
										confirmButtonText: 'Ya, hapus saja!'
								}).then((result) => {
										if (result.isConfirmed) {
												form.submit();
										}
								});
						});
				});
		</script>
@endpush



@push('script')
		{{-- lightbox2 --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

		<script>
				$(document).ready(function() {
						lightbox.option({
								'resizeDuration': 200,
								'wrapAround': true,
								'albumLabel': "Gambar %1 dari %2"
						});

						// Event listener for checkbox toggle
						$('.toggle_verifikasi').on('change', function() {
								let url = $(this).data('url');
								$.ajax({
										url: url,
										type: 'POST',
										data: {
												_token: '{{ csrf_token() }}',
												status: $(this).is(':checked')
										},
										success: function(response) {
												if (response.status === 200) {
														Swal.fire({
																title: "Berhasil!",
																text: "Berhasil update status pembayaran!",
																icon: "success"
														});

														setTimeout(() => {
																location.reload();
														}, 3000);
												}
										},
										error: function(xhr, status, error) {
												if (xhr.status === 500) {
														alert('Error: ' + xhr.responseJSON.message);
												}
										}
								});
						});
				});
		</script>
@endpush

@push('css')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
@endpush
