@extends('admin.layouts.main')
@section('content')
		<div class="row d-flex align-items-center" style="height: 80vh">
				<div class="col-6 mx-auto mt-5">
						<div class="card">
								<div class="card-header">
										<div class="card-title">
												edit data staff <strong class="text-capitalize text-decoration-underline">{{ $staff->nama }}</strong>
										</div>
								</div>
								<div class="card-body">
										<form action="{{ route('admin.staff.update', $staff->id) }}" method="post">
												@csrf
												@method('PUT')
												<div class="row">
														<div class="col-12">
																<x-input-text nama="nama" placeholder="masukan nama ..."
																		value="{{ $staff->nama }}">Nama</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="email" placeholder="masukan email ..."
																		value="{{ $staff->email }}">Email</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="username" placeholder="masukan username ..."
																		value="{{ $staff->username }}">Username</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="password" placeholder="masukan password baru ..."
																		type="password">Password</x-input-text>
														</div>

														<div class="col-12">
																<button type="submit" class="btn btn-primary">simpan</button>
														</div>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>
@endsection



{{-- last di sini , crud data staff --}}
