<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    protected $table = 'pelanggans'; // pastikan sama dengan nama tabel di migration

    protected $fillable = [
        'nama',
        'no_hp',
        'jenis_pelanggan' // contoh: 'reguler' atau 'premium'
    ];

    // Relasi: satu pelanggan bisa punya banyak transaksi
    public function transaksiSewa(): HasMany
    {
        return $this->hasMany(TransaksiSewa::class);
    }

    public function getJenisLabel(): string
    {
        return ucfirst($this->jenis_pelanggan); // Reguler atau Premium
    }
}
