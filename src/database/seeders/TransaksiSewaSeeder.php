<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransaksiSewa;

class TransaksiSewaSeeder extends Seeder
{
    public function run(): void
    {
        TransaksiSewa::create([
            'pelanggan_id' => 1, // harus ID yang sudah ada di pelanggans
            'tanggal_sewa' => now(),
            'tanggal_kembali' => now()->addDays(3),
            'total_bayar' => 150000,
            'status' => 'Selesai',
        ]);

        TransaksiSewa::create([
            'pelanggan_id' => 2,
            'tanggal_sewa' => now()->subDays(5),
            'tanggal_kembali' => now()->subDays(2),
            'total_bayar' => 250000,
            'status' => 'Selesai',
        ]);
    }
}
