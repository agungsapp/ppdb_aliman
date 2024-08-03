@extends('admin.layouts.main')

@section('content')
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-header">
										<div class="card-title">
												Data Staff
										</div>
								</div>
								<div class="card-body">
										<div class="row">


												<div class="col-lg-3 pb-5">
														<!-- Button trigger modal -->
														<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
																Tambah Staff
														</button>

														<!-- Modal -->
														<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
																aria-hidden="true">
																<div class="modal-dialog">
																		<div class="modal-content">
																				<div class="modal-header">
																						<h5 class="modal-title" id="exampleModalLabel">tambah data staff baru</h5>
																						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																				</div>
																				<form action="{{ route('admin.staff.store') }}" method="post">
																						@csrf
																						<div class="modal-body">
																								<div class="row">

																										<div class="col-12">
																												<div class="alert alert-info" role="alert">
																														password akan di berikan secara default <strong>staff123</strong>
																												</div>
																										</div>

																										<div class="col-12">
																												<x-input-text nama="nama" placeholder="masukan nama ...">nama</x-input-text>
																										</div>
																										<div class="col-12">
																												<x-input-text nama="username" placeholder="masukan username ...">username</x-input-text>
																										</div>
																										<div class="col-12">
																												<x-input-text nama="email" placeholder="masukan email ..."
																														type="email">email</x-input-text>
																										</div>
																								</div>
																						</div>
																						<div class="modal-footer">
																								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																								<button type="submit" class="btn btn-primary">Simpan</button>
																						</div>
																				</form>
																		</div>
																</div>
														</div>
												</div>


										</div>
										<table class="table">
												<thead>
														<tr>
																<th scope="col">#</th>
																<th scope="col">nama</th>
																<th scope="col">email</th>
																<th scope="col">tanggal</th>
																<th scope="col">aksi</th>
														</tr>
												</thead>
												<tbody>
														@forelse ($staffs as $staff)
																<tr>
																		<th scope="row">{{ $loop->iteration }}</th>
																		<td>{{ $staff->nama }}</td>
																		<td>{{ $staff->email }}</td>
																		<td>{{ \Carbon\Carbon::parse($staff->created_at)->format('d F Y H:i') }}</td>
																		<td>
																				<a href="{{ route('admin.staff.edit', $staff->id) }}" class="btn btn-warning d-block">edit</a>
																				<form action="{{ route('admin.staff.destroy', $staff->id) }}" method="post">
																						@csrf
																						@method('DELETE')
																						<button type="submit" class="btn btn-danger delete-button w-100 d-block mt-2">hapus</button>
																				</form>
																		</td>

																</tr>
														@empty
																<tr>
																		<td colspan="5" class="text-center">-- data masih kosong --</td>
																</tr>
														@endforelse

												</tbody>
										</table>
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
