<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi: membuat tabel 'lensas'
     */
    public function up(): void
    {
        Schema::create('lensas', function (Blueprint $table) {
            $table->id(); // ID utama
            $table->string('kode_alat')->unique(); // Kode unik alat (contoh: LN001)
            $table->string('nama_alat'); // Nama lensa (contoh: Canon 50mm)
            $table->double('harga_sewa_per_hari'); // Harga sewa per hari
            $table->string('tipe'); // Tipe lensa (fix, zoom, wide, dll)
            $table->integer('jarak_fokus'); // Panjang fokus dalam mm
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Rollback migrasi: menghapus tabel 'lensas'
     */
    public function down(): void
    {
        Schema::dropIfExists('lensas');
    }
};
