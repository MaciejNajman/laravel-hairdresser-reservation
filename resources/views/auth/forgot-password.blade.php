<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex flex-col items-start h-screen">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-950 shadow-md rounded px-8 pt-6 pb-6 mb-4 mt-4 text-gray-300">
                    {{__('Zapomniałeś hasła? Nie ma problemu. Wystarczy, że podasz nam swój adres e-mail,
                        a my wyślemy Ci link do resetowania hasła, który umożliwi Ci utworzenie nowego.') }}
            </div>
        </div>
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('password.email') }}" class="bg-indigo-950 shadow-md rounded px-8 pt-6 pb-6 mb-4 mt-4">
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
    </div>
</x-guest-layout>
