@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Donasi</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-10">

    <div class="flex justify-between mb-6">
        <h1 class="text-3xl font-bold text-green-600">
            Daftar Donasi
        </h1>

        <a href="/donations/create"
           class="bg-green-500 text-white px-5 py-3 rounded-xl">
            + Tambah
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach($donations as $donation)

        <div class="bg-white p-6 rounded-2xl shadow">
            @if($donation->image)

                <img src="{{ asset('storage/' . $donation->image) }}"
                     class="w-full h-52 object-cover rounded-xl mb-4">

            @endif

            <h2 class="text-2xl font-bold">
                {{ $donation->title }}
            </h2>

            <p class="text-gray-600 mt-2">
                {{ $donation->description }}
            </p>

            <div class="mt-4 space-y-2">

                <p>🍚 {{ $donation->portion }} Porsi</p>

                <p>📍 {{ $donation->location }}</p>

                <p>📞 {{ $donation->phone }}</p>

            </div>

            <div class="mt-4">
                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                    {{ $donation->status }}
                </span>
            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>

@endsection