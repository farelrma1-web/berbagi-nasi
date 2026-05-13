@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Donasi</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-10">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow">

        <h1 class="text-3xl font-bold mb-6 text-green-600">
            Tambah Donasi
        </h1>

        <form action="/donations" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-4">
                <label class="block mb-2">Judul Donasi</label>

                <input type="text"
                       name="title"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>

                <textarea name="description"
                          class="w-full border rounded-lg px-4 py-2"></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Jumlah Porsi</label>

                <input type="number"
                       name="portion"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Lokasi</label>

                <input type="text"
                       name="location"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">

             <label class="block mb-2">
                 Nomor HP
                </label>

                 <input type="text"
                        name="phone"
                        class="w-full border rounded-lg px-4 py-2">

        </div>

            <div class="mb-6">
                    <label class="block mb-2">Foto Makanan</label>

                    <input  type="file"
                            name="image"
                            class="w-full border rounded-lg px-4 py-2">
            </div>

            <button class="bg-green-500 text-white px-6 py-3 rounded-xl hover:bg-green-600">
                Simpan Donasi
            </button>

        </form>

    </div>

</div>

</body>
</html>

@endsection