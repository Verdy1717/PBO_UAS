<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drone;

class DroneSeeder extends Seeder
{
    public function run(): void
    {
        Drone::create([
            'kode_alat' => 'DR001',
            'nama_alat' => 'DJI Mavic Mini',
            'harga_sewa_per_hari' => 250000,
            'jarak_terbang' => 4000,
            'fitur_gps' => true
        ]);
    }
}
