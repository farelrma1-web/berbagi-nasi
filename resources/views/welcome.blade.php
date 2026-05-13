<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Berbagi Nasi</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-green-100 via-white to-orange-100 min-h-screen">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-10 py-6">

        <div>
            <h1 class="text-3xl font-extrabold text-green-600">
                🍱 Berbagi Nasi
            </h1>
        </div>

        @if (Route::has('login'))

            <div class="flex items-center gap-4">

                @auth

                    <a href="/admin/dashboard"
                       class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-xl shadow-lg transition duration-300">

                        Dashboard

                    </a>

                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-xl shadow-lg transition duration-300">

                            Logout

                        </button>

                    </form>

                @else

                    <a href="{{ route('login') }}"
                       class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-xl shadow-lg transition duration-300">

                        Login

                    </a>

                    <a href="{{ route('register') }}"
                       class="border border-green-500 text-green-600 hover:bg-green-500 hover:text-white px-5 py-2 rounded-xl transition duration-300">

                        Register

                    </a>

                @endauth

            </div>

        @endif

    </nav>

    <!-- Hero -->
    <section class="max-w-7xl mx-auto px-10 py-20 grid md:grid-cols-2 gap-10 items-center">

        <!-- Left -->
        <div>

            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 leading-tight">

                Berbagi Kebaikan
                <span class="text-green-600">
                    Lewat Makanan
                </span>

            </h1>

            <p class="text-gray-600 text-lg mt-6 leading-relaxed">

                Platform sosial untuk membantu masyarakat berbagi nasi,
                sembako, dan makanan kepada yang membutuhkan.

            </p>

            <div class="mt-8 flex gap-4">

                <a href="{{ route('register') }}"
                   class="bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-2xl shadow-xl transition duration-300">

                    Mulai Berbagi

                </a>

                <a href="{{ route('login') }}"
                   class="border border-green-500 text-green-600 hover:bg-green-500 hover:text-white px-8 py-4 rounded-2xl transition duration-300">

                    Login

                </a>

            </div>

        </div>

        <!-- Right -->
        <div class="flex justify-center">

            <div class="bg-white rounded-[40px] shadow-2xl p-10 text-center w-full max-w-md">

                <div class="text-8xl mb-6">
                    🍱
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Donasi Hari Ini
                </h2>

                <p class="text-gray-500 mb-6">
                    Mari bantu sesama dengan berbagi makanan
                    untuk masyarakat yang membutuhkan.
                </p>

                <div class="grid grid-cols-2 gap-4">

                    <div class="bg-green-100 rounded-2xl p-5">
                        <h3 class="text-3xl font-bold text-green-600">
                            120+
                        </h3>

                        <p class="text-gray-600 text-sm mt-2">
                            Donasi
                        </p>
                    </div>

                    <div class="bg-orange-100 rounded-2xl p-5">
                        <h3 class="text-3xl font-bold text-orange-500">
                            300+
                        </h3>

                        <p class="text-gray-600 text-sm mt-2">
                            Porsi
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>