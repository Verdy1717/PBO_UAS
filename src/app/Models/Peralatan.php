<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Peralatan extends Model
{
    protected $fillable = [
        'kode_alat',
        'nama_alat',
        'harga_sewa_per_hari'
    ];

    /**
     * Format harga sewa ke dalam format Rupiah.
     */
    public function getHargaFormat(): string
    {
        return 'Rp ' . number_format($this->harga_sewa_per_hari, 0, ',', '.');
    }

    /**
     * Harus diimplementasikan oleh subclass (Kamera, Lensa, Drone).
     */
    public abstract function getDeskripsi(): string;
}
