<nav class="navbar navbar-dark navbar-theme-primary col-12 d-lg-none px-4">
		<a class="navbar-brand me-lg-5" href="/">
				PPDB ONLINE
		</a>
		<div class="d-flex align-items-center">
				<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
		</div>
</nav>


@php
		$role = null;
@endphp



<nav id="sidebarMenu" class="sidebar d-lg-block collapse bg-gray-800 text-white" data-simplebar>
		<div class="sidebar-inner px-4 pt-3">
				<div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
						<div class="d-flex align-items-center">
								<div class="avatar-lg me-4">
										<img src="{{ asset('admin/assets') }}/img/team/profile-picture-3.jpg"
												class="card-img-top rounded-circle border-white" alt="Bonnie Green">
								</div>
								<div class="d-block">
										<h2 class="h5 mb-3">Hallo, nama</h2>
										<a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
												<svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
												</svg>
												Logout
										</a>
								</div>
						</div>
						<div class="collapse-close d-md-none">
								<a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
										aria-expanded="true" aria-label="Toggle navigation">
										<svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
														d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
														clip-rule="evenodd"></path>
										</svg>
								</a>
						</div>
				</div>
				<ul class="nav flex-column pt-md-0 pt-3">
						<li class="nav-item">
								<a href="../../index.html" class="nav-link d-flex align-items-center">
										<span class="sidebar-icon">
												<img src="{{ asset('admin/assets') }}/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
										</span>
										<span class="sidebar-text ms-1 mt-1">PPDB ONLINE</span>
								</a>
						</li>

						{{-- dashboard --}}
						<li class="nav-item {{ \Route::is('admin.dashboard.*') ? 'active' : '' }}">
								<a href="{{ route('admin.dashboard.index') }}" class="nav-link">
										<span class="sidebar-icon">
												<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
														<path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
												</svg>
										</span>
										<span class="sidebar-text">Dashboard</span>
								</a>
						</li>

						<li role="separator" class="dropdown-divider mb-2 mt-4 border-gray-700"></li>
						<li>
								<p class="mb-0 text-center">MASTER DATA</p>
						</li>
						<li role="separator" class="dropdown-divider mb-3 mt-1 border-gray-700"></li>
						@if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
								{{-- admin --}}
								<li class="nav-item {{ \Route::is('admin.peserta.*') ? 'active' : '' }}">
										<a href="{{ route('admin.peserta.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Peserta</span>
										</a>
								</li>
								@if (Auth::user()->role == 'admin')
										{{-- staff --}}
										<li class="nav-item {{ \Route::is('admin.staff.*') ? 'active' : '' }}">
												<a href="{{ route('admin.staff.index') }}" class="nav-link">
														<span class="sidebar-icon">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																		style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																		<path
																				d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																		</path>
																</svg>
														</span>
														<span class="sidebar-text">Data Staff</span>
												</a>
										</li>
								@endif

								<li class="nav-item {{ \Route::is('admin.sekolah.*') ? 'active' : '' }}">
										<a href="{{ route('admin.sekolah.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Sekolah</span>
										</a>
								</li>

								{{-- <li class="nav-item {{ \Route::is('admin.brosur.*') ? 'active' : '' }}">
										<a href="{{ route('admin.brosur.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Brosur</span>
										</a>
								</li> --}}
								<li class="nav-item {{ \Route::is('admin.pengumuman.*') ? 'active' : '' }}">
										<a href="{{ route('admin.pengumuman.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Pengumuman</span>
										</a>
								</li>
								<li class="nav-item {{ \Route::is('admin.syarat.*') ? 'active' : '' }}">
										<a href="{{ route('admin.syarat.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Syarat</span>
										</a>
								</li>

								{{-- admin --}}
								<li class="nav-item {{ \Route::is('admin.pembayaran.*') ? 'active' : '' }}">
										<a href="{{ route('admin.pembayaran.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Data Pembayaran</span>
										</a>
								</li>

						@endif

						<li role="separator" class="dropdown-divider mb-2 mt-4 border-gray-700"></li>
						<li>
								<p class="mb-0 text-center">AKUN</p>
						</li>





						{{-- collapse menu template --}}
						{{-- <li class="nav-item">
								<span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
										data-bs-target="#submenu-app">
										<span>
												<span class="sidebar-icon">
														<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
																xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd"
																		d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
																		clip-rule="evenodd"></path>
														</svg>
												</span>
												<span class="sidebar-text">Tables</span>
										</span>
										<span class="link-arrow">
												<svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd"
																d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																clip-rule="evenodd"></path>
												</svg>
										</span>
								</span>
								<div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
										<ul class="flex-column nav">
												<li class="nav-item">
														<a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
																<span class="sidebar-text">Bootstrap Tables</span>
														</a>
												</li>
										</ul>
								</div>
						</li> --}}
						@if (Auth::user()->role == 'staff')
								{{-- separator --}}
								<li role="separator" class="dropdown-divider mb-3 mt-1 border-gray-700"></li>
								{{-- profil staff --}}
								<li class="nav-item {{ \Route::is('admin.profil.*') ? 'active' : '' }}">
										<a href="{{ route('admin.profil.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Profil</span>
										</a>
								</li>
						@endif

						@if (Auth::user()->role == 'admin')
								{{-- separator --}}
								<li role="separator" class="dropdown-divider mb-3 mt-1 border-gray-700"></li>
								{{-- profil admin --}}

								<li class="nav-item {{ \Route::is('admin.profil.*') ? 'active' : '' }}">
										<a href="{{ route('admin.profil.index') }}" class="nav-link">
												<span class="sidebar-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																style="fill: rgba(247, 243, 243, 1);transform: ;msFilter:;">
																<path
																		d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
																</path>
														</svg>
												</span>
												<span class="sidebar-text">Ubah Password</span>
										</a>
								</li>
						@endif


						{{-- <li class="nav-item">
								<a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
										<span class="sidebar-icon">
												<img src="{{ asset('admin/assets') }}/img/themesberg.svg" height="20" width="28"
														alt="Themesberg Logo">
										</span>
										<span class="sidebar-text">Themesberg</span>
								</a>
						</li> --}}
						<li class="nav-item">
								<form action="{{ route('logout') }}" method="POST">
										@csrf

										<button type="submit"
												class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
												<span class="sidebar-icon d-inline-flex align-items-center justify-content-center">

														<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
																xmlns="http://www.w3.org/2000/svg">
																<path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
																<path
																		d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
																</path>
														</svg>
												</span>
												<span>Logout</span>
										</button>
								</form>
						</li>

				</ul>
		</div>
</nav>
