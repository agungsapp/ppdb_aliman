@extends('siswa.layouts.main')
@section('content')
		<div style="margin-top: 8rem;" class="hero-slide owl-carousel site-blocks-cover">

				<div class="intro-section"
						style="background-image: url('{{ asset('web') }}/hero/hero1.png'); background-size: cover; background-position : center;">
						<div class="container">
								<div class="row align-items-center">
										<div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
												<h1 style="font-size: 1.8em; margin-top: 9rem;" class="text-capitalize">Selamat datang</h1>
										</div>
								</div>
						</div>
				</div>
				<div class="intro-section"
						style="background-image: url('{{ asset('web') }}/hero/hero1.png; background-size: cover; background-position : center;');">
						<div class="container">
								<div class="row align-items-center">
										<div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
												<h1 style="font-size: 1.8em; margin-top: 9rem;" class="text-capitalize">penerimaan peserta didik baru</h1>
										</div>
								</div>
						</div>
				</div>

				{{-- <div class="intro-section"
						style="background-image: url('https://source.unsplash.com/random/1890x1080X?query=landscape');">
						<div class="container">
								<div class="row align-items-center">
										<div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
												<h1>You Can Learn Anything</h1>
										</div>
								</div>
						</div>
				</div> --}}

		</div>


		<div></div>

		<div class="site-section">
				<div class="container">
						<div class="row justify-content-center mb-5 text-center">
								<div class="col-lg-6 mb-5">
										<h2 class="section-title-underline mb-5">
												<span>MTs Al-Iman AL IMAN</span>
										</h2>
								</div>
						</div>
						<div class="row justify-content-center d-flex">
								<img src="{{ asset('web/banner/banner.jpeg') }}" style="width: 70%;" alt="" srcset="">
						</div>
				</div>
		</div>


		<div class="site-section">
				<div class="container">


						<div class="row justify-content-center mb-0 text-center">
								<div class="col-lg-6 mb-3">
										<h2 class="section-title-underline mb-3">
												<span>Pengumuman</span>
										</h2>
										<p>Informasi terbaru terkait pendaftaran sekolah.</p>
								</div>
						</div>

						<div class="row">
								<div class="col-12">
										<div class="owl-slide-3 owl-carousel">
												{{-- for loop pengumaman --}}
												@foreach ($pengumumans as $p)
														<div class="course-1-item" style="min-height: 600px;">
																<figure class="thumnail">
																		<a href="course-single.html"><img src="{{ Storage::url('upload/pengumuman/' . $p->thumbnail) }}"
																						alt="Image" class="img-fluid"></a>
																		<div class="price mb-1">{{ $p->created_at->isoFormat('D MMMM YYYY, HH.mm') }}</div>
																		<div class="category">
																				<h3>PENGUMUMAN</h3>
																		</div>
																</figure>
																<div class="course-1-content pb-4 pt-1">
																		<p class="mb-3 text-start">author : {{ $p->user->nama }}</p>
																		<h2>{{ $p->judul }}</h2>
																		<p class="desc mb-4">{!! Str::words($p->deskripsi, 10, '...') !!}</p>
																		<p><a href="{{ route('siswa.pengumuman.show', $p->id) }}" class="btn btn-primary rounded-0 px-4">Baca
																						Selengkapnya...</a></p>
																</div>
														</div>
												@endforeach



												{{-- loop end --}}

										</div>

								</div>
						</div>



				</div>
		</div>

		{{-- <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
				<div class="container">
						<div class="row">
								<div class="col-lg-4">
										<h2 class="section-title-underline style-2">
												<span>Tentang MTs Al-Iman</span>
										</h2>
								</div>
								<div class="col-lg-8">
										<p class="lead">MTs Al-Iman merupakan yayasan pendidikan sekolah berbasis pesantren dan berstatuskan swasta
												dengan satuan pendidikan jenjang MTs yang beralamatkan di Jl. Lintas Timur Unit 2, Dwi Warga Tunggal Jaya,
												Kec. Banjar Agung, Kab. Tulang Bawang, Lampung. Dalam menjalankan kegiatannya, MTs Al-Iman berada di bawah
												naungan Kementerian Agama.</p>
								</div>
						</div>
				</div>
		</div> --}}
@endsection
