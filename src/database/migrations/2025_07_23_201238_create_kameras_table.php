<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kameras', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alat')->unique();
            $table->string('nama_alat');
            $table->double('harga_sewa_per_hari');
            $table->integer('resolusi');
            $table->string('merk');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kameras');
    }
};
