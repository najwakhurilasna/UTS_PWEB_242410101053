<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NajaTrip - Open Trip Banyuwangi & Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    @if(!request()->is('login') && !request()->is('/'))
        <x-navbar />
    @endif

    <main class="container mx-auto px-4 py-8 {{ request()->is('login') || request()->is('/') ? '' : 'mt-16' }}">
        @yield('content')
    </main>

    @if(!request()->is('login') && !request()->is('/'))
        @include('components.footer')
    @endif

</body>
</html>
