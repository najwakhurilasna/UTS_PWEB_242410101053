<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<footer class="bg-blue-900 text-white mt-12">
    <div class="container mx-auto px-8 py-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="md:pl-40">
                <h3 class="text-lg font-bold mb-4 border-b border-gray-400 inline-block">Link Terkait</h3>
                <ul class="space-y-2 mt-3">
                    <li><a href="{{ url('/dashboard') }}/{{ $username ?? '' }}" class="text-gray-300 hover:text-white hover:underline transition">Dashboard</a></li>
                    <li><a href="{{ url('/pengelolaan') }}/{{ $username ?? '' }}" class="text-gray-300 hover:text-white hover:underline transition">Paket Trip</a></li>
                    <li><a href="{{ url('/profile') }}/{{ $username ?? '' }}" class="text-gray-300 hover:text-white hover:underline transition">Profile</a></li>
                </ul>
            </div>

            <div class="text-center">
                <div class="flex justify-center mb-3">
                    <img src="{{ asset('image.png') }}" alt="Logo NajaTrip" class="h-12 w-auto">
                </div>
                <h3 class="text-xl font-bold">NajaTrip</h3>
                <p class="text-gray-300 text-sm mt-1">Open Trip Banyuwangi - Bali</p>
                <p class="text-gray-400 text-xs mt-3 max-w-xs mx-auto">
                    Solusi mudah untuk menjelajahi pesona dua dunia: cerdas memilih rute, berakhlak dalam perjalanan, berwawasan wisata, dan bertanggung jawab sosial.
                </p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-gray-300 hover:text-green-400 transition text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-gray-300 hover:text-pink-400 transition text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-gray-400 transition text-xl"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="text-left md:pr-40">
                <h3 class="text-lg font-bold mb-4 border-b border-gray-400 inline-block">Kontak</h3>
                <div class="space-y-2 text-gray-300 text-sm mt-3">
                    <p><i class="fas fa-map-marker-alt w-5"></i> JL. Raya Banyuwangi, No.02</p>
                    <p><i class="fas fa-location-dot w-5"></i> Kembangbelor, Banyuwangi</p>
                    <p><i class="fas fa-location-dot w-5"></i> Jawa Timur, Indonesia</p>
                    <p><i class="fas fa-phone w-5"></i> (0333) 1234567</p>
                    <p><i class="fas fa-envelope w-5"></i> info@najatrip.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-white/30 py-4 text-center text-gray-300 text-sm">
        <p>© 2026 NajaTrip | Powered by Khuril</p>
    </div>
</footer>
