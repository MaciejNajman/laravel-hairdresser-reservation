<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center bg-slate-900">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-indigo-950 rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full object-right"
                            src="https://cdn.pixabay.com/photo/2021/05/31/16/19/logo-6299315_1280.png" alt="reservation img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-500">Utwórz rezerwację</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-700 rounded-full">
                                    Krok 1</div>
                            </div>

                            <form method="POST" action="{{ route('reservations.store.step.one') }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="first_name" class="block text-sm font-medium text-gray-300"> Imię
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="first_name" name="first_name" maxlength="20" required autofocus
                                            value="{{ $reservation->first_name ?? '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    @error('first_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="last_name" class="block text-sm font-medium text-gray-300"> Nazwisko
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="last_name" name="last_name" maxlength="20" required
                                            value="{{ $reservation->last_name ?? '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    @error('last_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-300"> Email </label>
                                    <div class="mt-1">
                                        <input type="email" id="email" name="email" required
                                            value="{{ $reservation->email ?? '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    @error('email')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="tel_number" class="block text-sm font-medium text-gray-300"> Numer telefonu
                                    </label>
                                    <div class="mt-1">
                                        <input type="tel" id="tel_number" name="tel_number" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" required
                                            value="{{ $reservation->tel_number ?? '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    <span class="text-xs text-gray-300">Format: 123 456 789</span>
                                    @error('tel_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="res_date" class="block text-sm font-medium text-gray-300"> Data rezerwacji
                                    </label>
                                    <div class="mt-1">
                                        <input type="datetime-local" id="res_date" name="res_date" required
                                            min="{{ $min_date->format('Y-m-d\TH:i') }}"
                                            max="{{ $max_date->format('Y-m-d\TH:i') }}"
                                            value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i') : '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    <span class="text-xs text-gray-300">Proszę wybrać godzinę pomiędzy 09:00-19:00.</span>
                                    @error('res_date')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="guest_number" class="block text-sm font-medium text-gray-300"> Liczba klientów
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" min="1" max="2" id="guest_number" name="guest_number" required
                                            value="{{ $reservation->guest_number ?? '' }}"
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" />
                                    </div>
                                    @error('guest_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-6 p-4 flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Dalej</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
