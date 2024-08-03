<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
						<span class="icon-close2 js-menu-toggle"></span>
				</div>
		</div>
		<div class="site-mobile-menu-body"></div>
</div>


<div class="bg-light py-2">
		<div class="container">
				<div class="row align-items-center">
						<div class="col-lg-9 d-none d-lg-block">
								<a href="#" class="small mr-3">
										{{-- <span class="icon-question-circle-o mr-2"></span>  --}}
										Hubungi Kami</a>
								<a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>082380709088</a>
								<a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> mtsaliman@gmail.com</a>
						</div>
						<div class="col-lg-3 text-right">
								@if (Auth::check())
										<form action="{{ route('logout') }}" method="POST">
												@csrf
												<button type="submit" class="small btn btn-primary rounded-0 px-4 py-2"><span class="icon-users"></span>
														Logout</button>
										</form>
								@else
										<a href="{{ route('login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
										<a href="{{ route('register') }}" class="small btn btn-primary rounded-0 px-4 py-2"><span
														class="icon-users"></span>
												Daftar</a>
								@endif
						</div>
				</div>
		</div>
</div>
<header class="site-navbar js-sticky-header site-navbar-target py-4" role="banner">

		<div class="container">
				<div class="d-flex align-items-center">
						<div class="site-logo">
								<a href="index.html" class="d-block">
										<img src="{{ asset('web') }}/logo/logo.png" width="90" alt="Image" class="img-fluid">
								</a>
						</div>
						<div class="mx-auto">
								<nav class="site-navigation position-relative text-right" role="navigation">
										<ul class="site-menu main-menu js-clone-nav d-none d-lg-block mr-auto">
												<li class="active">
														<a href="{{ route('siswa.beranda.index') }}" class="nav-link fw-bold text-left">Beranda</a>
														<a href="{{ route('siswa.syarat.index') }}" class="nav-link fw-bold text-left">Syarat</a>
														<a href="{{ route('siswa.jadwal.index') }}" class="nav-link fw-bold text-left">Jadwal</a>

														@if (Auth::check())
																@if (Auth::user()->role == 'siswa')
																		<a href="{{ route('siswa.pembayaran.index') }}" class="nav-link fw-bold text-left">Pembayaran</a>
																@endif
														@endif
												</li>
												{{-- <li class="has-children">
														<a href="about.html" class="nav-link text-left">Syarat</a>
														<ul class="dropdown">
																<li><a href="teachers.html">Our Teachers</a></li>
																<li><a href="about.html">Our School</a></li>
														</ul>
												</li> --}}

										</ul>
										</ul>
								</nav>

						</div>
						<div class="ml-auto">
								<div class="social-wrap">
										<a href="#"><span class="icon-facebook"></span></a>
										<a href="#"><span class="icon-twitter"></span></a>
										<a href="#"><span class="icon-linkedin"></span></a>

										<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
														class="icon-menu h3"></span></a>
								</div>
						</div>

				</div>
		</div>

</header>
