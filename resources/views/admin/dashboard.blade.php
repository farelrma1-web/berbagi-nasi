@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-green-100 via-white to-orange-100 p-8">

    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-10">

            <div>
                <h1 class="text-5xl font-extrabold text-green-600">
                    Dashboard Admin 🍱
                </h1>

                <p class="text-gray-600 mt-3 text-lg">
                    Selamat datang di sistem Berbagi Nasi
                </p>
            </div>

            <div class="mt-5 md:mt-0">
                <a href="/donations/create"
                   class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-2xl shadow-lg transition duration-300">

                    + Tambah Donasi

                </a>
            </div>

        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <!-- User -->
            <div class="bg-white rounded-3xl shadow-xl p-8">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-gray-500">
                            Total User
                        </p>

                        <h2 class="text-5xl font-bold text-blue-500 mt-3">
                            {{ $totalUsers ?? 0 }}
                        </h2>
                    </div>

                    <div class="text-6xl">
                        👥
                    </div>

                </div>

            </div>

            <!-- Donasi -->
            <div class="bg-white rounded-3xl shadow-xl p-8">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-gray-500">
                            Total Donasi
                        </p>

                        <h2 class="text-5xl font-bold text-green-500 mt-3">
                            {{ $totalDonations ?? 0 }}
                        </h2>
                    </div>

                    <div class="text-6xl">
                        🍱
                    </div>

                </div>

            </div>

            <!-- Porsi -->
            <div class="bg-white rounded-3xl shadow-xl p-8">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-gray-500">
                            Total Porsi
                        </p>

                        <h2 class="text-5xl font-bold text-orange-500 mt-3">
                            {{ $totalPortions ?? 0 }}
                        </h2>
                    </div>

                    <div class="text-6xl">
                        🍚
                    </div>

                </div>

            </div>

        </div>

        <!-- Search -->
        <div class="mb-6">

            <form method="GET">

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari donasi..."
                       class="w-full md:w-96 rounded-2xl border-gray-300 shadow-lg">

            </form>

        </div>

        <!-- Table -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

            <div class="px-8 py-6 border-b">

                <h2 class="text-3xl font-bold text-gray-800">
                    Data Donasi
                </h2>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-green-50">

                        <tr>

                            <th class="px-6 py-4 text-left">
                                Judul
                            </th>

                            <th class="px-6 py-4 text-left">
                                Porsi
                            </th>

                            <th class="px-6 py-4 text-left">
                                Lokasi
                            </th>

                            <th class="px-6 py-4 text-left">
                                Deskripsi
                            </th>

                            <th class="px-6 py-4 text-left">
                                Gambar
                            </th>

                            <th class="px-6 py-4 text-left">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($donations as $donation)

                        <tr class="border-b hover:bg-gray-50 transition duration-300">

                            <td class="px-6 py-5 font-semibold">
                                {{ $donation->title }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $donation->portion }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $donation->location }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $donation->description }}
                            </td>

                            <td class="px-6 py-5">

                                @if($donation->image)

                                    <img src="{{ asset('storage/' . $donation->image) }}"
                                         class="w-24 h-24 object-cover rounded-2xl">

                                @else

                                    <span class="text-gray-400">
                                        Tidak ada gambar
                                    </span>

                                @endif

                            </td>

                            <td class="px-6 py-5 flex gap-3">

                                <a href="/donations/{{ $donation->id }}/edit"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-xl">

                                    Edit

                                </a>

                                <form action="/donations/{{ $donation->id }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6"
                                class="text-center py-10 text-gray-500">

                                Belum ada data donasi 😄

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection