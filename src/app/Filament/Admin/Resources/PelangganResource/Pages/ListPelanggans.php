<?php

namespace App\Filament\Admin\Resources\PelangganResource\Pages;

use App\Filament\Admin\Resources\PelangganResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListPelanggans extends ListRecords
{
    protected static string $resource = PelangganResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('nomor_hp'),
                Tables\Columns\TextColumn::make('alamat')->limit(30),
            ]);
    }
}
