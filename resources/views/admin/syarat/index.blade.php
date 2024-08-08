@extends('admin.layouts.main')
@section('content')
		<section class="container-fluid">
				<div class="row">
						<div class="col-12">
								{{-- card  --}}
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Data Syarat Pendaftaran
												</div>
										</div>
										<form action="{{ route('admin.syarat.update', $syarat->id) }}" method="post" enctype="multipart/form-data">
												@csrf
												@method('PUT')
												<div class="card-body">
														<div class="row">
																<div class="col-12">
																		<x-input-text nama="judul" value="{{ $syarat->judul }}">
																				Judul
																		</x-input-text>
																</div>
																<div class="col-12 mb-3">
																		<label for="deskripsi">Deskripsi</label>
																		<textarea id="summernote" name="deskripsi">{{ $syarat->deskripsi }}</textarea>
																</div>
																<div class="col-6">
																		<label for="formFile" class="form-label">Gambar</label>
																		<input name="thumbnail" class="form-control" type="file" id="formFile">
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
