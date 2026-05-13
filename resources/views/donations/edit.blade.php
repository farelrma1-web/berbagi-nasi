@extends('layouts.app')

@section('content')

<div class="container mx-auto py-10">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow">

        <h1 class="text-3xl font-bold mb-6 text-blue-600">
            Edit Donasi
        </h1>

        <form action="/donations/{{ $donation->id }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2">Judul</label>

                <input type="text"
                       name="title"
                       value="{{ $donation->title }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>

                <textarea name="description"
                          class="w-full border rounded-lg px-4 py-2">{{ $donation->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Jumlah Porsi</label>

                <input type="number"
                       name="portion"
                       value="{{ $donation->portion }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Lokasi</label>

                <input type="text"
                       name="location"
                       value="{{ $donation->location }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-6">
                <label class="block mb-2">Nomor HP</label>

                <input type="text"
                       name="phone"
                       value="{{ $donation->phone }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <button class="bg-blue-500 text-white px-6 py-3 rounded-xl">
                Update Donasi
            </button>

        </form>

    </div>

</div>

@endsection