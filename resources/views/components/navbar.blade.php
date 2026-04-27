@php
    $username = request()->route('username');
@endphp

<nav class="bg-blue-900 text-white shadow-lg fixed top-0 w-full z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex items-center space-x-2">
            <img src="{{ asset('image.png') }}" alt="Logo NajaTrip" class="h-8 w-auto">
            <span class="text-xl font-bold">NajaTrip</span>
        </div>

        <div class="space-x-4">
            @if($username)
                <a href="{{ route('dashboard', $username) }}" class="hover:text-blue-200">Dashboard</a>
                <a href="{{ route('pengelolaan', $username) }}" class="hover:text-blue-200">Paket Trip</a>
                <a href="{{ route('profile', $username) }}" class="hover:text-blue-200">Profile</a>
            @endif

            <a href="{{ route('login') }}" class="hover:text-red-300">Logout</a>
        </div>

    </div>
</nav>
