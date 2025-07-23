<?php

namespace App\Filament\Admin\Resources\DroneResource\Pages;

use App\Filament\Admin\Resources\DroneResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListDrones extends ListRecords
{
    protected static string $resource = DroneResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_alat')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nama_alat')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga_sewa_per_hari')->money('IDR', true),
                Tables\Columns\TextColumn::make('jarak_terbang')->suffix(' meter')->sortable(),
                Tables\Columns\IconColumn::make('fitur_gps')
                    ->boolean()
                    ->label('Fitur GPS'),
            ])
            ->defaultSort('kode_alat');
    }
}
