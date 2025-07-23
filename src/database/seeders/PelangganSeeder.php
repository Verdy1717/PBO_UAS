<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::create([
            'nama' => 'Verdy Fransius',
            'no_hp' => '081234567890',
            'jenis_pelanggan' => 'premium'
        ]);

        Pelanggan::create([
            'nama' => 'Alya Putri',
            'no_hp' => '089876543210',
            'jenis_pelanggan' => 'reguler'
        ]);
    }
}
