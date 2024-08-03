<!DOCTYPE html>
<html lang="en">

@include('siswa.layouts.partials.header')


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

		@include('sweetalert::alert')

		<div class="site-wrap">

				@include('siswa.layouts.partials.navbar')

				@yield('content')

				@include('siswa.layouts.partials.footer')

		</div>
		<!-- .site-wrap -->


		<!-- loader -->
		<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
						<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
						<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
								stroke="#51be78" />
				</svg>
		</div>

		<script src="/siswa/js/jquery-3.3.1.min.js"></script>
		<script src="/siswa/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="/siswa/js/jquery-ui.js"></script>
		<script src="/siswa/js/popper.min.js"></script>
		<script src="/siswa/js/bootstrap.min.js"></script>
		<script src="/siswa/js/owl.carousel.min.js"></script>
		<script src="/siswa/js/jquery.stellar.min.js"></script>
		<script src="/siswa/js/jquery.countdown.min.js"></script>
		<script src="/siswa/js/bootstrap-datepicker.min.js"></script>
		<script src="/siswa/js/jquery.easing.1.3.js"></script>
		<script src="/siswa/js/aos.js"></script>
		<script src="/siswa/js/jquery.fancybox.min.js"></script>
		<script src="/siswa/js/jquery.sticky.js"></script>
		<script src="/siswa/js/jquery.mb.YTPlayer.min.js"></script>
		<script src="/siswa/js/main.js"></script>


		@include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

		@stack('script')
</body>

</html>
