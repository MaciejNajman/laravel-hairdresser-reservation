<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg bg-indigo-950">
                    <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="price list img"/>
                    <div class="px-6 py-4">
                        <h4 class="mb-4 text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            {{ $menu->name }}</h4>
                        <p class="leading-normal text-gray-300">{{ $menu->description }}.</p>
                    </div>
                    <div class="flex items-center justify-between px-6 py-4">
                        <span class="text-xl text-gray-300">{{ $menu->price }}zł</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
