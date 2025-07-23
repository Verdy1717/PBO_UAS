<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lensa;

class LensaSeeder extends Seeder
{
    public function run(): void
    {
        Lensa::create([
            'kode_alat' => 'LN001',
            'nama_alat' => 'Canon 50mm f/1.8',
            'harga_sewa_per_hari' => 75000,
            'tipe' => 'Fix',
            'jarak_fokus' => 50
        ]);
    }
}
