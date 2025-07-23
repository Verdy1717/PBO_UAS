<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamera;
use App\Models\Lensa;
use App\Models\Drone;
use App\Models\Pelanggan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Kamera::create([
            'kode_alat' => 'KM001',
            'nama_alat' => 'Canon EOS 90D',
            'harga_sewa_per_hari' => 150000,
            'resolusi' => 32,
            'merk' => 'Canon'
        ]);

        Lensa::create([
            'kode_alat' => 'LN001',
            'nama_alat' => 'Canon EF 50mm',
            'harga_sewa_per_hari' => 50000,
            'tipe' => 'Fix',
            'jarak_fokus' => 50
        ]);

        Drone::create([
            'kode_alat' => 'DR001',
            'nama_alat' => 'DJI Mini 3 Pro',
            'harga_sewa_per_hari' => 200000,
            'jarak_terbang' => 10,
            'fitur_gps' => true
        ]);

        Pelanggan::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'nomor_hp' => '081234567890',
            'alamat' => 'Jl. Merdeka No.123'
        ]);
    }
}
