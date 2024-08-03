@extends('siswa.layouts.main')
@section('content')
		<!-- start -->
		<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
				<div class="container">
						<div class="row align-items-end justify-content-center text-center">
								<div class="col-lg-7">
										<h2 class="mb-0">Pembayaran</h2>
										<p>Instruksi pembayaran</p>
								</div>
						</div>
				</div>
		</div>


		<div class="custom-breadcrumns border-bottom">
				<div class="container">
						<a href="#">Pembayaran</a>
				</div>
		</div>


		<div class="site-section">
				<div class="container">
						<div class="row justify-content-center">
								<div class="col-md-12">
										<div class="w-100">
												<div class="w-25 mx-auto">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-100" viewBox="0 0 24 24"
																style="fill: rgba(6, 164, 63, 1);transform: ;msFilter:;">
																<path
																		d="M4.035 15.479A3.976 3.976 0 0 0 4 16c0 2.378 2.138 4.284 4.521 3.964C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.036C17.857 20.284 20 18.378 20 16c0-.173-.012-.347-.035-.521C21.198 14.786 22 13.465 22 12s-.802-2.786-2.035-3.479C19.988 8.347 20 8.173 20 8c0-2.378-2.143-4.288-4.521-3.964C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.036C6.138 3.712 4 5.622 4 8c0 .173.012.347.035.521C2.802 9.214 2 10.535 2 12s.802 2.786 2.035 3.479zm1.442-5.403 1.102-.293-.434-1.053A1.932 1.932 0 0 1 6 8c0-1.103.897-2 2-2 .247 0 .499.05.73.145l1.054.434.293-1.102a1.99 1.99 0 0 1 3.846 0l.293 1.102 1.054-.434C15.501 6.05 15.753 6 16 6c1.103 0 2 .897 2 2 0 .247-.05.5-.145.73l-.434 1.053 1.102.293a1.993 1.993 0 0 1 0 3.848l-1.102.293.434 1.053c.095.23.145.483.145.73 0 1.103-.897 2-2 2-.247 0-.499-.05-.73-.145l-1.054-.434-.293 1.102a1.99 1.99 0 0 1-3.846 0l-.293-1.102-1.054.434A1.935 1.935 0 0 1 8 18c-1.103 0-2-.897-2-2 0-.247.05-.5.145-.73l.434-1.053-1.102-.293a1.993 1.993 0 0 1 0-3.848z">
																</path>
																<path d="m15.742 10.71-1.408-1.42-3.331 3.299-1.296-1.296-1.414 1.414 2.704 2.704z"></path>
														</svg>
												</div>
										</div>
										<h1>Terimakasih</h1>

										<p>Anda telah berhasil melewati serangkaian proses pendaftaran peserta didik baru dengan nomor registrasi
												<strong class="bg-success rounded-lg p-1 text-white">{{ Auth::user()->siswa->kode_registrasi }}</strong>.
												kini
												tiba di
												langkah
												terakhir
												yaitu pembayaran biaya daftar ulang.
										</p>

										<p>Silahkan lanjutkan pembayaran dan kirimkan ke rekening berikut ini.</p>
										<strong>BRI. 5578-12-123456-78-9</strong>
										<p>A/n SMP AL IMAN</p>

										<p>lakukan pembayaran sebesar <strong>Rp.300.000</strong> di akhiri dengan 1 digit terakhir dari kode registrasi
												anda</p>
										<p>jadi total yang harus anda bayarkan adalah
												<strong>{{ Str::rupiah(Auth::user()->hitungBayar(300000)) }}</strong>
										</p>
										<p>
												jika sudah melakukan transfer silahkan lanjutkan upload bukti pembayaran.
										</p>

										<a href="{{ route('siswa.pembayaran.create') }}" class="btn btn-warning text-white">Upload Bukti Pembayaran</a>




								</div>
						</div>
				</div>
		</div>
@endsection
