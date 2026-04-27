@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden mt-20">
    <div class="bg-blue-900 p-6 text-white text-center">
        <div class="flex justify-center mb-3">
            <img src="{{ asset('image.png') }}" alt="Logo NajaTrip" class="h-16 w-auto">
        </div>
        <h2 class="text-3xl font-bold">NajaTrip</h2>
        <p class="text-sm mt-1">Open Trip Banyuwangi & Bali</p>
        <p class="text-sm mt-1">by Najwa Khuril A</p>
    </div>

    <form method="POST" action="{{ route('proses.login') }}" class="p-6">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 text-center">Username</label>
            <input type="text" name="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan username (contoh: khuril cantik)" required>
            <p class="text-xs text-gray-500 mt-1 text-center">GASSSS USERNAME APAPUN</p>
        </div>

        <button type="submit" class="w-full bg-blue-900 text-white font-bold py-2 rounded-lg hover:opacity-90 transition">
            Login
        </button>
    </form>
</div>
@endsection
