@extends('siswa.layouts.main')
@section('content')
		<br>
		<br>
		<br>
		<br>
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
