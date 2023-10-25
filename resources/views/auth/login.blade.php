<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="bg-light" method="POST" action="{{ route('login') }} ">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('hasło')" />

            <x-text-input id="password" class="block mt-1 w-full "
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-orange-50 border-gray-300 dark:border-gray-700 text-orange-50  dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-orange-50">{{ __('Pamiętaj mnie!') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-orange-50 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    {{ __('Zarejestruj się') }}
                </a>

            <div class="ml-4"></div>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Zaloguj się') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
