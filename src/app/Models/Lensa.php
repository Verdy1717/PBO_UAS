<?php

namespace App\Models;

class Lensa extends Peralatan
{
    protected $table = 'lensas'; // sesuaikan dengan nama tabel di migration

    protected $fillable = [
        'kode_alat',
        'nama_alat',
        'harga_sewa_per_hari',
        'tipe',
        'jarak_fokus'
    ];

    public function getDeskripsi(): string
    {
        return "Lensa tipe $this->tipe dengan jarak fokus $this->jarak_fokus mm.";
    }
}
