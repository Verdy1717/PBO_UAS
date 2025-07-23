<?php

namespace App\Models;

class Drone extends Peralatan
{
    protected $table = 'drones'; // pastikan sesuai nama tabel migrasi

    protected $fillable = [
        'kode_alat',
        'nama_alat',
        'harga_sewa_per_hari',
        'jarak_terbang',
        'fitur_gps'
    ];

    public function getDeskripsi(): string
    {
        $gps = $this->fitur_gps ? 'dengan GPS' : 'tanpa GPS';
        return "Drone ini memiliki jarak terbang $this->jarak_terbang meter dan $gps.";
    }
}
