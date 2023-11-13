<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Wszystkie rezerwacje</a>
            </div>
            <div class="m-2 p-2 rounded bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Imię </label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name" required
                                    value="{{ $reservation->first_name }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('first_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Nazwisko </label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name" required
                                    value="{{ $reservation->last_name }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('last_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Email </label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" value="{{ $reservation->email }}" required
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Numer telefonu
                            </label>
                            <div class="mt-1">
                                <input type="tel" id="tel_number" name="tel_number" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" required
                                    value="{{ $reservation->tel_number }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            <span class="text-xs text-gray-300">Format: 123 456 789</span>
                            @error('tel_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Data rezerwacji
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date" required
                                    value="{{ $reservation->res_date->format('Y-m-d\TH:i:s') }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('res_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Liczba klientów
                            </label>
                            <div class="mt-1">
                                <input type="number" min="1" max="2" id="guest_number" name="guest_number" required
                                    value="{{ $reservation->guest_number }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Fryzjer</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1
                                border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                            {{ $table->name }}
                                            ({{ $table->guest_number }} klient)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Aktualizuj</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
