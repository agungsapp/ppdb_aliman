<x-guest-layout>
		<!-- Session Status -->
		<x-auth-session-status class="mb-4" :status="session('status')" />

		<form method="POST" action="/login">
				@csrf

				<!-- Email Address -->
				<div>
						<x-input-label for="login" :value="__('Username / E-mail')" />
						<x-text-input id="login" class="mt-1 block w-full" type="text" name="login" :value="old('login')" required
								autofocus autocomplete="username" />
						<x-input-error :messages="$errors->get('login')" class="mt-2" />
				</div>

				<!-- Password -->
				<div class="mt-4">
						<x-input-label for="password" :value="__('Password')" />

						<x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
								autocomplete="current-password" />

						<x-input-error :messages="$errors->get('password')" class="mt-2" />
				</div>

				<!-- Remember Me -->
				<div class="mt-4 block">
						<label for="remember_me" class="inline-flex items-center">
								<input id="remember_me" type="checkbox"
										class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
								<span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
						</label>
				</div>

				<div class="mt-4 flex items-center justify-end">
						@if (Route::has('password.request'))
								<a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
										href="{{ route('password.request') }}">
										{{ __('Lupa password?') }}
								</a>
						@endif

						<x-primary-button class="ms-3">
								{{ __('Log in') }}
						</x-primary-button>
				</div>

				<div class="mt-4">
						<p>belum punya akun ? <a href="{{ route('register') }}" class="underline">daftar</a></p>
				</div>
		</form>
</x-guest-layout>
