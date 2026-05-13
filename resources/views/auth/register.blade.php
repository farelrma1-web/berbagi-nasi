<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-orange-100 py-10">

        <div class="w-full max-w-lg bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/40">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div class="text-6xl mb-3">
                    🍱
                </div>

                <h1 class="text-3xl font-extrabold text-green-600">
                    Berbagi Nasi
                </h1>

                <p class="text-gray-500 mt-2">
                    Buat akun untuk mulai berbagi kebaikan
                </p>

            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Nama Lengkap
                    </label>

                    <input type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required autofocus>

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                </div>

                <!-- Email -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- Role -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Role
                    </label>

                    <select name="role"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm">

                        <option value="donatur">
                            Donatur
                        </option>

                        <option value="relawan">
                            Relawan
                        </option>

                    </select>

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

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <!-- Confirm Password -->
                <div class="mb-6">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Konfirmasi Password
                    </label>

                    <input type="password"
                        name="password_confirmation"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required>

                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 transition duration-300 text-white font-bold py-3 rounded-2xl shadow-lg">

                    Daftar Sekarang

                </button>

            </form>

            <!-- Login -->
            <p class="text-center text-sm text-gray-500 mt-6">

                Sudah punya akun?

                <a href="{{ route('login') }}"
                    class="text-green-600 font-semibold hover:underline">

                    Login disini

                </a>

            </p>

        </div>

    </div>

</x-guest-layout>