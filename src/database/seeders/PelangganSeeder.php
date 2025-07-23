<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::create([
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'telepon' => '08123456789',
            'alamat' => 'Jl. Merdeka No. 1'
        ]);

        Pelanggan::create([
            'nama' => 'Jane Smith',
            'email' => 'jane@example.com',
            'telepon' => '08129876543',
            'alamat' => 'Jl. Sudirman No. 10'
        ]);
    }
}
