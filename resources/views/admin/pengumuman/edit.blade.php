@extends('admin.layouts.main')
@section('content')
		<section class="container-fluid">
				<div class="row">
						<div class="col-12">
								{{-- card  --}}
								<div class="card">
										<div class="card-header">
												<div class="card-title">
														Edit Pengumuman
												</div>
										</div>
										<form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="post"
												enctype="multipart/form-data">
												@csrf
												@method('PUT')

												<div class="card-body">
														<div class="row">
																<div class="col-12">
																		<x-input-text nama="judul" value="{{ $pengumuman->judul }}">
																				Judul
																		</x-input-text>
																</div>
																<div class="col-12 mb-3">
																		<label for="deskripsi">Deskripsi</label>
																		<textarea id="summernote" name="deskripsi">{{ $pengumuman->deskripsi }}</textarea>
																</div>
																<div class="col-6">
																		<label for="formFile" class="form-label">Gambar</label>
																		<input class="form-control" name="thumbnail" type="file" id="formFile">
																</div>
																<div class="col-6 d-flex justify-content-center">
																		<img id="gambar" src="{{ Storage::url('upload/pengumuman/' . $pengumuman->thumbnail) }}"
																				alt="{{ $pengumuman->thumbnail }}" srcset="" style="width: 50%">
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

						$('#formFile').change(function(event) {
								const input = event.target;
								if (input.files && input.files[0]) {
										const reader = new FileReader();
										reader.onload = function(e) {
												$('#gambar').attr('src', e.target.result);
										}
										reader.readAsDataURL(input.files[0]);

										// Menampilkan nama file yang dipilih
										const fileName = input.files[0].name;
										$(input).next('.custom-file-label').html(fileName);
								}
						});

						// Menampilkan nama file yang sebelumnya diunggah
						const oldFileName = "{{ session('old_thumbnail') }}";
						if (oldFileName) {
								$('#formFile').next('.custom-file-label').html(oldFileName);
						}
				});
		</script>
@endpush
