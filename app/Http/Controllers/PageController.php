<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard($username)
    {
        $destinasiPopuler = [
            [
                "nama" => "Kawah Ijen",
                "lokasi" => "Banyuwangi",
                "rating" => "4.9"
            ],
            [
                "nama" => "Pulau Tabuhan",
                "lokasi" => "Banyuwangi",
                "rating" => "4.8"
            ],
            [
                "nama" => "Bedugul",
                "lokasi" => "Bali",
                "rating" => "4.7"
            ],
            [
                "nama" => "Pantai Pandawa",
                "lokasi" => "Bali",
                "rating" => "4.8"
            ],
        ];

        return view('dashboard', [
            'username' => $username,
            'destinasi' => $destinasiPopuler
        ]);
    }

    public function pengelolaan($username)
    {
        $paketTrip = [
            [
                "nama" => "Open Trip Ijen",
                "lokasi" => "Banyuwangi",
                "harga" => "Rp 350.000",
                "durasi" => "12 Jam",
                "fasilitas" => "Transportasi, Tiket, Guide"
            ],
            [
                "nama" => "Pulau Tabuhan Snorkeling",
                "lokasi" => "Banyuwangi",
                "harga" => "Rp 450.000",
                "durasi" => "8 Jam",
                "fasilitas" => "Perahu, Alat Snorkel, Makan Siang"
            ],
            [
                "nama" => "Bedugul Tour",
                "lokasi" => "Bali",
                "harga" => "Rp 400.000",
                "durasi" => "10 Jam",
                "fasilitas" => "Transportasi, Tiket Masuk"
            ],
            [
                "nama" => "Nusa Penida Trip 3H",
                "lokasi" => "Bali",
                "harga" => "Rp 550.000",
                "durasi" => "1 Hari",
                "fasilitas" => "Fast Boat, Makan Siang, Guide"
            ],
        ];

        return view('pengelolaan', [
            'username' => $username,
            'paketTrip' => $paketTrip
        ]);
    }

    public function profile($username)
    {
        return view('profile', [
            'username' => $username
        ]);
    }

}
