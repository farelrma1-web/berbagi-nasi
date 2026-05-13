<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Berbagi Nasi</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">
                BerbagiNasi
            </h1>

            <div class="space-x-4">
                <a href="/login" class="text-gray-700 hover:text-green-600">
                    Login
                </a>

                <a href="/register"
                   class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h2 class="text-5xl font-bold text-gray-800 leading-tight">
                    Berbagi Nasi,
                    Berbagi Kebahagiaan
                </h2>

                <p class="mt-6 text-gray-600 text-lg">
                    Platform komunitas untuk membantu sesama melalui
                    donasi makanan dengan cepat, mudah, dan tepat sasaran.
                </p>

                <div class="mt-8">
                    <a href="/register"
                       class="bg-green-500 text-white px-6 py-3 rounded-xl text-lg hover:bg-green-600">
                        Mulai Berbagi
                    </a>
                </div>
            </div>

            <div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
                     class="rounded-2xl shadow-xl">
            </div>

        </div>
    </section>

    <!-- Statistik -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6">

            <div class="grid md:grid-cols-3 gap-8 text-center">

                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h3 class="text-4xl font-bold text-green-600">120+</h3>
                    <p class="mt-2 text-gray-600">Donasi Tersalurkan</p>
                </div>

                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h3 class="text-4xl font-bold text-green-600">80+</h3>
                    <p class="mt-2 text-gray-600">Relawan Aktif</p>
                </div>

                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h3 class="text-4xl font-bold text-green-600">300+</h3>
                    <p class="mt-2 text-gray-600">Penerima Manfaat</p>
                </div>

            </div>

        </div>
    </section>

</body>
</html>