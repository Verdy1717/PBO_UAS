<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class TransaksiSewa extends Model
{
    protected $table = 'transaksi_sewas'; // pastikan cocok dengan tabel migration

    protected $fillable = [
        'pelanggan_id',
        'peralatan_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'harga_total',
        'denda'
    ];

    // Relasi ke Pelanggan
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Relasi ke Alat (bisa Kamera/Lensa/Drone tergantung setup kamu)
    public function peralatan(): BelongsTo
    {
        return $this->belongsTo(Peralatan::class);
    }

    // Hitung durasi hari sewa
    public function durasiSewa(): int
    {
        return Carbon::parse($this->tanggal_pinjam)->diffInDays(Carbon::parse($this->tanggal_kembali));
    }

    // Hitung total biaya sewa
    public function hitungTotal(): float
    {
        $durasi = $this->durasiSewa();
        $biaya = $this->peralatan->harga_sewa_per_hari * $durasi;
        return $biaya;
    }

    // Hitung denda keterlambatan (misal denda Rp 20.000/hari)
    public function hitungDenda(): float
    {
        $hariTerlambat = Carbon::now()->diffInDays(Carbon::parse($this->tanggal_kembali), false);
        return $hariTerlambat > 0 ? $hariTerlambat * 20000 : 0;
    }
}
