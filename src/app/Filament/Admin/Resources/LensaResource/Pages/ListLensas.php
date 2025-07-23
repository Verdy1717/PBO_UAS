<?php

namespace App\Filament\Admin\Resources\LensaResource\Pages;

use App\Filament\Admin\Resources\LensaResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListLensas extends ListRecords
{
    protected static string $resource = LensaResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_alat')->label('Kode Alat')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nama_alat')->label('Nama Alat')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga_sewa_per_hari')->label('Harga Sewa')->money('IDR', true),
                Tables\Columns\TextColumn::make('tipe')->label('Tipe')->sortable(),
                Tables\Columns\TextColumn::make('jarak_fokus')->label('Jarak Fokus')->suffix(' mm'),
            ])
            ->defaultSort('kode_alat');
    }
}
