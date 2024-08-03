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
												<span>Jadwal PPDB Online</span>
										</h2>
								</div>
						</div>

						<div class="row">
								<div class="col-12">
										<div class="card">
												<div class="card-body">


														<table class="table-responsive table">
																<thead>
																		<tr>
																				<th scope="col">#</th>
																				<th scope="col">Jadwal</th>
																				<th scope="col">Tanggal Mulai</th>
																				<th scope="col">Tanggal Selesai</th>
																				<th scope="col">Periode</th>
																		</tr>
																</thead>
																<tbody>


																		@forelse ($jadwals as $jadwal)
																				<tr>
																						<th scope="row">{{ $loop->iteration }}</th>
																						<td>{{ $jadwal->judul }}</td>
																						<td>{{ $jadwal->mulai }}</td>
																						<td>{{ $jadwal->selesai }}</td>
																						<td>{{ $jadwal->periode }}</td>
																				</tr>
																		@empty
																		@endforelse
																</tbody>
														</table>

												</div>
										</div>
								</div>
						</div>

				</div>
		</div>
@endsection
