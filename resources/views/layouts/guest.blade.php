<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="bg-gray-900 shadow-md border-b border-slate-700" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 md:text-3xl" href="/">
                    PSY(chic)
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-grey-300 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0 text-lg">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400"
                    href="{{ route('categories.index') }}">Usługi</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400"
                    href="{{ route('menus.index') }}">Cennik</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400"
                    href="{{ route('reservations.step.one') }}">Zarezerwuj wizytę</a>
                @guest
                    <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400"
                        href="{{ route('login') }}">Zaloguj się</a>
                    <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400"
                        href="{{ route('register') }}">Załóż konto</a>
                @endguest
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-400 hover:text-green-400">
                        @csrf
                        <button type="submit">Wyloguj się</button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased min-h-screen bg-slate-900">
        {{ $slot }}
    </div>
    <footer class="bg-gray-900 border-t border-slate-700">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                    <li><a href="/">Strona główna</a></li>
                    <li><a href="/#section1">O nas</a></li>
                    <li><a href="/#section2">Udogodnienia</a></li>
                    <li><a href="/#section3">Kontakt</a></li>
                </ul>
            </div>
            <div class="flex justify-center mt-4 lg:mt-0">
                <a href="https://github.com/michalstas/laravel-restaurant-reservation-main">
                    <svg stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-8 h-8 neutral-950" viewBox="0 0 300 300" fill="white">
                        <path d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0"></path> <path d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
