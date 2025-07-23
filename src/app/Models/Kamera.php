<?php

namespace App\Models;

class Kamera extends Peralatan
{
    protected $table = 'kameras'; // pastikan sesuai nama tabel di migration

    protected $fillable = [
        'kode_alat',
        'nama_alat',
        'harga_sewa_per_hari',
        'resolusi',
        'merk'
    ];

    public function getDeskripsi(): string
    {
        return "Kamera $this->merk dengan resolusi $this->resolusi MP.";
    }
}
