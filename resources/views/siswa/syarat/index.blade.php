@extends('siswa.layouts.main')
@section('content')
		<div class="site-section">
				<div class="container-fluid">
						<div class="row">
								<div class="col-12">
										<img style="object-fit: cover; width: 100%; max-height: 300px;"
												src="{{ Storage::url('upload/syarat/' . $syarat->thumbnail) }}" alt="{{ $syarat->thumbnail }}">
								</div>
						</div>
				</div>
		</div>
		<div class="site-section">
				<div class="container">
						<div class="row justify-content-center mb-5 text-center">
								<div class="col-lg-6 mb-5">
										<h2 class="section-title-underline mb-5">
												<span>{{ $syarat->judul }}</span>
										</h2>
								</div>
						</div>

						<div class="row">
								<div class="col-12">
										<div>{!! $syarat->deskripsi !!}</div>
								</div>
						</div>

				</div>
		</div>
@endsection
