<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berbagi Nasi</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">

        <div class="container mx-auto px-6 py-4 flex justify-between items-center">

            <a href="/"
               class="text-2xl font-bold text-green-600">
                BerbagiNasi
            </a>

            <div class="space-x-5">

                <a href="/"
                   class="text-gray-700 hover:text-green-600">
                    Home
                </a>

                <a href="/donations"
                   class="text-gray-700 hover:text-green-600">
                    Donasi
                </a>

                @auth

                    <span class="text-gray-600">
                        Hi, {{ auth()->user()->name }}
                    </span>

                    <form action="/logout"
                          method="POST"
                          class="inline">

                        @csrf

                        <button class="text-red-500 hover:text-red-700">
                            Logout
                        </button>

                    </form>

                @else

                    <a href="/login"
                       class="text-gray-700 hover:text-green-600">
                        Login
                    </a>

                    <a href="/register"
                       class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                        Register
                    </a>

                @endauth

            </div>

        </div>

    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>