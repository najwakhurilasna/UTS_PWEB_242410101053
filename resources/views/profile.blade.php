@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6 text-center">
    <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
        <span class="text-5xl">👤</span>
    </div>

    <h1 class="text-3xl font-bold text-gray-800 mb-2">Profile Saya</h1>
    <p class="text-gray-600 mb-6">Halo, <span class="font-bold text-blue-600">{{ $username }}</span> 😊 Ini adalah halaman profile Anda di NajaTrip.</p>

    <div class="max-w-md mx-auto text-left bg-gray-50 rounded-lg p-4">
        <h3 class="font-bold text-gray-700 mb-3">📋 Informasi Akun</h3>
        <p><span class="font-semibold">Username:</span> {{ $username }}</p>
        <p><span class="font-semibold">Status:</span> <span class="text-green-600">Aktif</span></p>
        <p><span class="font-semibold">Bergabung sejak:</span> 2026</p>
    </div>
</div>
@endsection
