@extends('admin.layouts.main')
@section('content')
		<section class="container-fluid">
				<div class="row">
						<div class="col-12">
								{{-- card  --}}
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Data Pengumuman
												</div>
										</div>
										<form action="" method="post">
												<div class="card-body">

														<div class="row">
																<div class="col-12">
																		<x-input-text nama="judul">
																				Judul
																		</x-input-text>
																</div>
																<div class="col-12 mb-3">
																		<label for="deskripsi">Deskripsi</label>
																		<textarea id="summernote" name="deskripsi"></textarea>
																</div>
																<div class="col-6">
																		<label for="formFile" class="form-label">Gambar</label>
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
		</section>

		{{-- data --}}
		<section class="container-fluid mt-5">
				<div class="row">
						<div class="col-12">
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Data Pengumuman
												</div>
										</div>
										<div class="card-body">

												<table class="table">
														<thead>
																<tr>
																		<th scope="col">#</th>
																		<th style="width: 100px" scope="col">Judul</th>
																		<th style="width: 100px;" scope="col">Dekripsi</th>
																		<th scope="col">tanggal</th>
																		<th scope="col">aksi</th>
																</tr>
														</thead>
														<tbody>
																@forelse ($pengumumans as $pengumuman)
																		<tr>
																				<th scope="row">{{ $loop->iteration }}</th>
																				<td>{{ $pengumuman->judul }}</td>
																				<td>{!! Str::words($pengumuman->deskripsi, 10, '...') !!}</td>
																				<td>{{ \Carbon\Carbon::parse($pengumuman->created_at)->format('d F Y H:i') }}</td>
																				<td>
																						<a href="{{ route('admin.pengumuman.edit', $pengumuman->id) }}"
																								class="btn btn-warning d-block">edit</a>
																						<form action="{{ route('admin.pengumuman.destroy', $pengumuman->id) }}" method="post">
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
		</section>
@endsection


@push('css')
		<link href="{{ asset('summernote') }}/summernote.css" rel="stylesheet">
@endpush

@push('script')
		<!-- include summernote css/js -->
		<script>
				$(document).ready(function() {
						$('#summernote').summernote();
				});
		</script>
@endpush
