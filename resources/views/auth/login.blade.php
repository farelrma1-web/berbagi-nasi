<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-orange-100">

        <div class="w-full max-w-md bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/40">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div class="text-6xl mb-3">
                    🍱
                </div>

                <h1 class="text-3xl font-extrabold text-green-600">
                    Berbagi Nasi
                </h1>

                <p class="text-gray-500 mt-2">
                    Masuk untuk melanjutkan berbagi kebaikan
                </p>

            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4"
                :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required autofocus>

                </div>

                <!-- Password -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Password
                    </label>

                    <input type="password"
                        name="password"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required>

                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between mb-6">

                    <label class="flex items-center">

                        <input type="checkbox"
                            name="remember"
                            class="rounded border-gray-300 text-green-600 shadow-sm">

                        <span class="ml-2 text-sm text-gray-600">
                            Remember me
                        </span>

                    </label>

                    @if (Route::has('password.request'))

                        <a class="text-sm text-green-600 hover:underline"
                            href="{{ route('password.request') }}">

                            Lupa password?

                        </a>

                    @endif

                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 transition duration-300 text-white font-bold py-3 rounded-2xl shadow-lg">

                    Login Sekarang

                </button>

            </form>

            <!-- Register -->
            <p class="text-center text-sm text-gray-500 mt-6">

                Belum punya akun?

                <a href="{{ route('register') }}"
                    class="text-green-600 font-semibold hover:underline">

                    Daftar disini

                </a>

            </p>

        </div>

    </div>

</x-guest-layout>