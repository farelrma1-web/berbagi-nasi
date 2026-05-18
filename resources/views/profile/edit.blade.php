@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-green-100 via-white to-orange-100 py-10 px-6">

    <div class="max-w-4xl mx-auto space-y-6">

        <h1 class="text-4xl font-extrabold text-green-600 mb-6">
            Profile Saya 👤
        </h1>

        <!-- Update Profile -->
        <div class="p-6 bg-white shadow-2xl rounded-3xl">

            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>

        </div>

        <!-- Update Password -->
        <div class="p-6 bg-white shadow-2xl rounded-3xl">

            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>

        </div>

        <!-- Delete User -->
        <div class="p-6 bg-white shadow-2xl rounded-3xl">

            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>

        </div>

    </div>

</div>

@endsection