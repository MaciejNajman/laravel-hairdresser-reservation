<x-guest-layout>
    <div class="text-basic text-gray-700 dark:text-gray-300 
    flex items-start justify-center mx-5 mt-4 mb-4 px-6 pt-4 pb-4 border-2 rounded-lg border-solid border-indigo-900 bg-indigo-950">
        {{ __('Zapomniałeś hasła? Nie ma problemu. Wystarczy, że podasz nam swój adres e-mail, a my wyślemy Ci link do resetowania hasła, który umożliwi Ci utworzenie nowego.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex items-start justify-center h-screen">
        <form method="POST" action="{{ route('password.email') }}" class="bg-indigo-950 shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-4">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Wyślij link do resetowania hasła') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
