<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-orange-100 py-10">

        <div class="w-full max-w-md bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/40">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div class="text-6xl mb-3">
                    🔒
                </div>

                <h1 class="text-3xl font-extrabold text-green-600">
                    Reset Password
                </h1>

                <p class="text-gray-500 mt-2">
                    Masukkan email untuk menerima link reset password
                </p>

            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4"
                :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email -->
                <div class="mb-6">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required autofocus>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 transition duration-300 text-white font-bold py-3 rounded-2xl shadow-lg">

                    Kirim Link Reset

                </button>

            </form>

            <!-- Back Login -->
            <p class="text-center text-sm text-gray-500 mt-6">

                Kembali ke

                <a href="{{ route('login') }}"
                    class="text-green-600 font-semibold hover:underline">

                    halaman login

                </a>

            </p>

        </div>

    </div>

</x-guest-layout>