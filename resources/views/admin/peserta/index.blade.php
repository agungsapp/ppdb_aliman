@extends('admin.layouts.main')

@section('content')
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-header">
										<div class="card-title">
												Data Calon Peserta Didik
										</div>
								</div>
								<div class="card-body">
										<table class="table">
												<thead>
														<tr>
																<th scope="col">#</th>
																<th scope="col">kode registrasi</th>
																<th scope="col">nama</th>
																<th scope="col">email</th>
																<th scope="col">tanggal</th>
																<th scope="col">proses</th>
																<th scope="col">aksi</th>
														</tr>
												</thead>
												<tbody>
														@forelse ($siswas as $siswa)
																<tr>
																		<th scope="row">{{ $loop->iteration }}</th>
																		<td>{{ $siswa->siswa->kode_registrasi ?? 'kosong' }}</td>
																		<td>{{ $siswa->nama }}</td>
																		<td>{{ $siswa->email }}</td>
																		<td>{{ \Carbon\Carbon::parse($siswa->created_at)->format('d F Y H:i') }}</td>
																		<td>
																				<ul>
																						@foreach ($siswa->proses as $key => $value)
																								<li>{{ $key }}: {{ $value ? '✅' : '❌' }}</li>
																						@endforeach
																				</ul>
																		</td>
																		<td>
																				<a href="{{ route('admin.peserta.edit', $siswa->id) }}" class="btn btn-warning d-block">edit</a>

																				@if (Auth::user()->role != 'staff')
																						<form action="{{ route('admin.peserta.destroy', $siswa->id) }}" method="post">
																								@csrf
																								@method('DELETE')
																								<button type="submit" class="btn btn-danger delete-button w-100 d-block mt-2">hapus</button>
																						</form>
																				@endif

																				@if (Auth::user()->role == 'staff')
																						<a href="{{ route('admin.peserta-cetak', $siswa->id) }}" class="btn btn-info d-block mt-2">cetak</a>
																				@endif

																		</td>

																</tr>
														@empty
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
