@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-2">🏠 Dashboard</h1>
    <p class="text-gray-600 mb-6">Selamat datang, <span class="font-bold text-blue-600">{{ $username }}</span>🥰 Yuk eksplorasi open trip terbaik kami.</p>

    <div class="bg-blue-900 rounded-lg p-6 text-white mb-8">
        <h2 class="text-xl font-bold">NajaTrip</h2>
        <p>Solusi Mudah Menjelajahi Pesona Banyuwangi & Bali! Nikmati perjalanan open trip yang terorganisir, aman, dan penuh keseruan.</p>
    </div>

    <h2 class="text-2xl font-bold text-gray-800 mb-4">Destinasi Populer</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($destinasi as $item)
        <div class="bg-gray-50 rounded-lg p-4 shadow-md hover:shadow-lg transition">
            <h3 class="font-bold text-lg text-blue-800">{{ $item['nama'] }}</h3>
            <p class="text-gray-600 text-sm">📍 {{ $item['lokasi'] }}</p>
            <p class="text-yellow-500 text-sm">⭐ Rating {{ $item['rating'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
