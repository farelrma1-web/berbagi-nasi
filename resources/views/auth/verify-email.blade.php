<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-orange-100 py-10">

        <div class="w-full max-w-lg bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/40">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div class="text-6xl mb-3">
                    📧
                </div>

                <h1 class="text-3xl font-extrabold text-green-600">
                    Verifikasi Email
                </h1>

                <p class="text-gray-500 mt-2">
                    Terima kasih sudah mendaftar di Berbagi Nasi
                </p>

            </div>

            <div class="mb-6 text-sm text-gray-600 leading-relaxed text-center">

                Sebelum melanjutkan, silakan verifikasi alamat email kamu
                melalui link yang sudah dikirimkan ke email.

            </div>

            @if (session('status') == 'verification-link-sent')

                <div class="mb-4 text-sm font-medium text-green-600 text-center">

                    Link verifikasi baru berhasil dikirim ke email kamu.

                </div>

            @endif

            <div class="flex flex-col gap-4">

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 transition duration-300 text-white font-bold py-3 rounded-2xl shadow-lg">

                        Kirim Ulang Email Verifikasi

                    </button>

                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-600 transition duration-300 text-white font-bold py-3 rounded-2xl shadow-lg">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</x-guest-layout>