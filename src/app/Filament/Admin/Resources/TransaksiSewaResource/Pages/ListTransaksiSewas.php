<?php

namespace App\Filament\Admin\Resources\TransaksiSewaResource\Pages;

use App\Filament\Admin\Resources\TransaksiSewaResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListTransaksiSewas extends ListRecords
{
    protected static string $resource = TransaksiSewaResource::class;

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('pelanggan.nama')->label('Nama Pelanggan'),
            Tables\Columns\TextColumn::make('jenis_alat'),
            Tables\Columns\TextColumn::make('alat_id'),
            Tables\Columns\TextColumn::make('tanggal_sewa')->date(),
            Tables\Columns\TextColumn::make('tanggal_kembali')->date(),
            Tables\Columns\TextColumn::make('total_harga')->money('IDR'),
        ]);
    }
}
