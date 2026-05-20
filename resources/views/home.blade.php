<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Berbagi Nasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white/90 border-b border-slate-200 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <div class="h-11 w-11 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-700 font-semibold">B</div>
                <div>
                    <h1 class="text-2xl font-semibold tracking-tight text-slate-900">BerbagiNasi</h1>
                    <p class="text-sm text-slate-500">Komunitas donasi makanan yang hangat dan bersahaja.</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-3 text-sm">
                <a href="/login" class="text-slate-600 hover:text-emerald-700 transition">Login</a>
                <a href="/register" class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-5 py-2 text-white shadow-sm transition hover:bg-emerald-700">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="container mx-auto px-6 py-16">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div class="space-y-8">
                <div class="max-w-xl rounded-[2rem] border border-slate-200 bg-white/95 p-8 shadow-lg shadow-slate-200/50">
                    <h2 class="text-4xl sm:text-5xl font-semibold text-slate-900 leading-tight">
                        Berbagi Nasi, Berbagi Kebahagiaan
                    </h2>
                    <p class="mt-5 text-slate-600 text-lg leading-relaxed">
                        Platform komunitas untuk membantu sesama melalui donasi makanan dengan cara yang ramah, jelas, dan terpercaya.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="/register" class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-6 py-3 text-white text-base font-medium transition hover:bg-emerald-700">
                            Mulai Berbagi
                        </a>
                        <a href="/login" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-slate-700 transition hover:border-emerald-500 hover:text-emerald-700">
                            Masuk
                        </a>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-slate-100 via-slate-50 to-emerald-50 shadow-xl shadow-slate-200/60">

            <img 
                src="/images/berbagi.png"
                alt="Donasi makanan"
                 class="w-full max-w-3xl h-[500px] object-contain object-center rounded-[2rem]"
            />

            </div>
        </div>
    </main>

    <!-- Statistik -->
    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-6">
            <div class="grid gap-6 md:grid-cols-3">
                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                    <p class="text-3xl font-semibold text-emerald-600">120+</p>
                    <p class="mt-3 text-slate-600">Donasi Tersalurkan</p>
                </div>
                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                    <p class="text-3xl font-semibold text-emerald-600">80+</p>
                    <p class="mt-3 text-slate-600">Relawan Aktif</p>
                </div>
                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                    <p class="text-3xl font-semibold text-emerald-600">300+</p>
                    <p class="mt-3 text-slate-600">Penerima Manfaat</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-t border-slate-200 bg-white py-8">
        <div class="container mx-auto px-6 text-center text-sm text-slate-500">
            © 2026 BerbagiNasi. Ikut serta dalam gerakan berbagi tanpa harus berlebihan.
        </div>
    </footer>
</body>
</html>