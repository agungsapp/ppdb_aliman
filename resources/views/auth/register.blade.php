<x-guest-layout>
		<form method="POST" action="{{ route('register') }}">
				@csrf

				<!-- Name -->
				<div>
						<x-input-label for="name" :value="__('Name')" />
						<x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required
								autofocus autocomplete="name" />
						<x-input-error :messages="$errors->get('name')" class="mt-2" />
				</div>

				<!-- Name -->
				<div class="mt-4">
						<x-input-label for="username" :value="__('Username')" />
						<x-text-input id="username" class="mt-1 block w-full" type="text" name="username" :value="old('username')" required
								autofocus autocomplete="username" />
						<x-input-error :messages="$errors->get('name')" class="mt-2" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
						<x-input-label for="email" :value="__('Email')" />
						<x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
								autocomplete="email" />
						<x-input-error :messages="$errors->get('email')" class="mt-2" />
				</div>

				<!-- Password -->
				<div class="mt-4">
						<x-input-label for="password" :value="__('Password')" />

						<x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
								autocomplete="new-password" />

						<x-input-error :messages="$errors->get('password')" class="mt-2" />
				</div>

				<!-- Confirm Password -->
				<div class="mt-4">
						<x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

						<x-text-input id="password_confirmation" class="mt-1 block w-full" type="password" name="password_confirmation"
								required autocomplete="new-password" />

						<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
				</div>

				<div class="mt-4 flex items-center justify-end">

						<x-primary-button class="ms-4">
								{{ __('Register') }}
						</x-primary-button>
				</div>

				<div class="mt-3">
						<p class="me-2">Sudah punya akun ?</p>
						<a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
								href="{{ route('login') }}">
								{{ __('klik di sini untuk login') }}
						</a>
				</div>
		</form>
</x-guest-layout>
