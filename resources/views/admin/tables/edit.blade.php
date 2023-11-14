<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Wszyscy fryzjerzy</a>
            </div>
            <div class="m-2 p-2 rounded bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.tables.update', $table->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"> Nazwa </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $table->name }}"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1
                                border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>
                                            {{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="location" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Staż</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="form-multiselect block w-full mt-1
                                border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>
                                            {{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('location')
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
