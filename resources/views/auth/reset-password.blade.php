<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-orange-100 py-10">

        <div class="w-full max-w-md bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/40">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div class="text-6xl mb-3">
                    🔑
                </div>

                <h1 class="text-3xl font-extrabold text-green-600">
                    Reset Password
                </h1>

                <p class="text-gray-500 mt-2">
                    Buat password baru untuk akun kamu
                </p>

            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        class="w-full rounded-2xl border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm"
                        required autofocus>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <!-- Password -->
                <div class="mb-5">

                    <label class="block text-gray-700 mb-2 font-semibold">
                        Password Baru
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

                    Reset Password

                </button>

            </form>

        </div>

    </div>

</x-guest-layout>