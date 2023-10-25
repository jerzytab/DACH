<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Dziękujemy za zarejestrowanie się! Czy zanim zaczniesz, możesz zweryfikować swój adres e-mail, klikając link, który właśnie wysłaliśmy do Ciebie e-mailem? Jeśli nie otrzymałeś wiadomości e-mail, z przyjemnością wyślemy Ci kolejną.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Na adres e-mail podany podczas rejestracji został wysłany nowy link weryfikacyjny.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Ponownie wysłać e-mail weryfikacyjny') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Wyloguj się') }}
            </button>
        </form>
    </div>
</x-guest-layout>
