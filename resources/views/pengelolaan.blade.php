@extends('layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-2">🎒 Paket Open Trip</h1>
    <p class="text-gray-600 mb-6">Yuk pilih paket perjalanan favoritmu, <span class="font-bold text-blue-600">{{ $username }}</span>!</p>

    <section class="mb-12">
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800"><i class="fas fa-mountain"></i> Trip Banyuwangi</h2>
            <p class="text-gray-500">Keindahan alam timur Jawa</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($paketTrip as $paket)
                @if($paket['lokasi'] == 'Banyuwangi')
                <div class="border rounded-lg p-5 shadow-md hover:shadow-lg transition">
                    <div class="flex justify-between items-start mb-2">
                        <div class="text-3xl">
                            @if(str_contains($paket['nama'], 'Ijen')) 🌋
                            @elseif(str_contains($paket['nama'], 'Tabuhan')) 🏝️
                            @elseif(str_contains($paket['nama'], 'Grand')) 🌊
                            @elseif(str_contains($paket['nama'], 'Keliling')) 🚐
                            @else 🌿
                            @endif
                        </div>
                        @if(str_contains($paket['nama'], 'Ijen') || str_contains($paket['nama'], 'Tabuhan') || str_contains($paket['nama'], 'Grand'))
                            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Best Seller</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">{{ $paket['nama'] }}</h3>
                    <p class="text-2xl font-bold text-green-600 mb-2">{{ $paket['harga'] }} <span class="text-sm font-normal text-gray-500">/ orang</span></p>
                    <p class="text-gray-600 text-sm mb-3">{{ $paket['durasi'] }}</p>
                    <div class="border-t pt-3 mt-2">
                        <div class="font-semibold text-sm mb-2">🎁 Fasilitas:</div>
                        <ul class="text-sm text-gray-600 space-y-1">
                            @foreach(explode(', ', $paket['fasilitas']) as $fasilitas)
                            <li><i class="fas fa-check-circle text-green-500 text-xs mr-2"></i> {{ $fasilitas }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="mb-12">
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800"><i class="fas fa-umbrella-beach"></i> Trip Bali</h2>
            <p class="text-gray-500">Pesona Pulau Dewata</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($paketTrip as $paket)
                @if($paket['lokasi'] == 'Bali')
                <div class="border rounded-lg p-5 shadow-md hover:shadow-lg transition">
                    <div class="flex justify-between items-start mb-2">
                        <div class="text-3xl">
                            @if(str_contains($paket['nama'], '3H')) 🏝️
                            @else 🗓️
                            @endif
                        </div>
                        @if(str_contains($paket['nama'], '3H'))
                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Populer</span>
                        @else
                            <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full">Premium</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">{{ $paket['nama'] }}</h3>
                    <p class="text-2xl font-bold text-green-600 mb-3">{{ $paket['harga'] }} <span class="text-sm font-normal text-gray-500">/ orang</span></p>
                    <div class="border-t pt-3 mt-2">
                        <div class="font-semibold text-sm mb-2">🎁 Fasilitas:</div>
                        <ul class="text-sm text-gray-600 space-y-1">
                            @foreach(explode(', ', $paket['fasilitas']) as $fasilitas)
                            <li><i class="fas fa-check-circle text-green-500 text-xs mr-2"></i> {{ $fasilitas }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>
</div>

<style>
    .paket-card {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .paket-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
    }
</style>

@endsection
