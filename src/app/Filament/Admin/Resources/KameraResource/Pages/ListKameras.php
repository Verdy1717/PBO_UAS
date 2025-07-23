<?php

namespace App\Filament\Admin\Resources\KameraResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\KameraResource;
use Filament\Tables;
use Filament\Tables\Table;

class ListKameras extends ListRecords
{
    protected static string $resource = KameraResource::class;

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_alat')->label('Kode Alat')->searchable(),
            Tables\Columns\TextColumn::make('nama_alat')->label('Nama Alat')->searchable(),
            Tables\Columns\TextColumn::make('harga_sewa_per_hari')->label('Harga Sewa')->money('IDR'),
            Tables\Columns\TextColumn::make('resolusi')->label('Resolusi')->sortable(),
            Tables\Columns\TextColumn::make('merk')->label('Merk')->searchable(),
        ]);
    }
}
