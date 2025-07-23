<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamera;

class KameraSeeder extends Seeder
{
    public function run(): void
    {
        Kamera::create([
            'kode_alat' => 'KM001',
            'nama_alat' => 'Canon EOS 80D',
            'harga_sewa_per_hari' => 150000,
            'resolusi' => 24,
            'merk' => 'Canon'
        ]);

        Kamera::create([
            'kode_alat' => 'KM002',
            'nama_alat' => 'Sony A6400',
            'harga_sewa_per_hari' => 200000,
            'resolusi' => 26,
            'merk' => 'Sony'
        ]);

        Kamera::create([
            'kode_alat' => 'KM003',
            'nama_alat' => 'Canon EOS 90D',
            'harga_sewa_per_hari' => 150000,
            'resolusi' => 32,
            'merk' => 'Canon'
        ]);
    }
}
