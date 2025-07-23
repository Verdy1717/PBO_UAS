<?php

namespace App\Filament\Admin\Resources\PeralatanResource\Pages;

use App\Filament\Admin\Resources\PeralatanResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListPeralatans extends ListRecords
{
    protected static string $resource = PeralatanResource::class;

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_alat')->searchable(),
            Tables\Columns\TextColumn::make('nama_alat')->searchable(),
            Tables\Columns\TextColumn::make('kategori')->searchable(),
            Tables\Columns\TextColumn::make('harga_sewa_per_hari')->money('IDR'),
            Tables\Columns\TextColumn::make('keterangan')->limit(40),
        ]);
    }
}
