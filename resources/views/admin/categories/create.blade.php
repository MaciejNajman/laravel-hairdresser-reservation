<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Wszystkie usługi</a>
            </div>
            <div class="m-2 p-2 rounded bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Nazwa</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('name') border-red-400 @enderror" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Zdjęcie</label>
                            <div class="mt-1">
                                <input type="file"
                                id="image"
                                name="image"
                                class="
                                    file:mr-5 file:py-1 file:px-3 file:border-gray-700
                                    file:text-xs file:font-medium
                                    file:dark:bg-indigo-500 file:text-white
                                    file:rounded-md
                                    hover:file:cursor-pointer 
                                    hover:file:bg-indigo-700
                                    text-sm
                                    text-gray-700
                                    dark:text-white
                                    bg-white
                                    border
                                    border-gray-400
                                    rounded-md
                                    shadow-sm 
                                    block 
                                    w-full
                                    py-2 
                                    px-3
                                    text-base 
                                    leading-normal 
                                    transition duration-150 ease-in-out
                                    sm:text-sm
                                    sm:leading-5 
                                    appearance-none
                                    dark:bg-gray-900
                                    dark:border-gray-700
                                    focus:border
                                    focus:border-indigo-500
                                    focus:ring-indigo-600
                                    focus:outline-none
                                    focus:ring-0
                                    @error('name') border-red-400 @enderror"/>
                            </div>
                            @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Opis</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md 
                                    dark:border-gray-700
                                    dark:bg-gray-900
                                    dark:text-gray-300
                                    dark:focus:ring-indigo-600
                                    @error('name') border-red-400 @enderror"></textarea>
                            </div>
                            @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Zapisz</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
