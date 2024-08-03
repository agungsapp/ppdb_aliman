@extends('admin.layouts.main')
@section('content')
		<div class="row d-flex align-items-center" style="height: 80vh">
				<div class="col-6 mx-auto mt-5">
						<div class="card">
								<div class="card-header">
										<div class="card-title">
												Hallo, <strong class="text-capitalize text-decoration-underline">{{ $profil->nama }}</strong>
										</div>
								</div>
								<div class="card-body">

										<div class="alert alert-info" role="alert">
												<h4 class="alert-heading">Berikut adalaj !</h4>
												<p>klik tombol update jika ingin melakukan perubahan pada profil anda seperti password maupun username.</p>

										</div>

										<form action="{{ route('admin.profil.update', $profil->id) }}" method="post">
												@csrf
												@method('PUT')
												<div class="row">
														<div class="col-12">
																<x-input-text nama="nama" placeholder="masukan nama ..."
																		value="{{ $profil->nama }}">Nama</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="email" placeholder="masukan email ..."
																		value="{{ $profil->email }}">Email</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="username" placeholder="masukan username ..."
																		value="{{ $profil->username }}">Username</x-input-text>
														</div>
														<div class="col-12">
																<x-input-text nama="password" placeholder="masukan password ..." type="password">Password</x-input-text>
														</div>

														<div class="col-12">
																<button type="submit" class="btn btn-warning">update</button>
														</div>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>
@endsection
