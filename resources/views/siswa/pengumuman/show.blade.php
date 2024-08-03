@extends('siswa.layouts.main')
@section('content')
		<br>
		<br>
		<br>
		<br>
		<div class="site-section">
				<div class="container">
						<div class="row justify-content-center mb-5 text-center">
								<div class="col-lg-9 mb-5">
										<h2 class="section-title-underline mb-5">
												<span>{{ $pengumuman->judul }}</span>
										</h2>
								</div>
						</div>

						<div class="row">
								<div class="col-12 p-5">
										{!! $pengumuman->deskripsi !!}
								</div>
						</div>

				</div>
		</div>
@endsection
