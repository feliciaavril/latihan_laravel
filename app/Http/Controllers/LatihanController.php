<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Menampilkan form dan tabel di satu halaman
    public function index()
    {
        // Data mahasiswa contoh (bisa diganti dari database nanti)
        $mahasiswa = [
            ['nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('latihan', compact('mahasiswa'));
    }
}
