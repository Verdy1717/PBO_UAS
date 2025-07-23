<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TransaksiSewaResource\Pages;
use App\Models\TransaksiSewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TransaksiSewaResource extends Resource
{
    protected static ?string $model = TransaksiSewa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_penyewa')
                    ->required()
                    ->label('Nama Penyewa'),
                Forms\Components\TextInput::make('nama_barang')
                    ->required()
                    ->label('Nama Barang'),
                Forms\Components\DatePicker::make('tanggal_sewa')
                    ->required()
                    ->label('Tanggal Sewa'),
                Forms\Components\DatePicker::make('tanggal_kembali')
                    ->required()
                    ->label('Tanggal Kembali'),
                Forms\Components\TextInput::make('harga_total')
                    ->numeric()
                    ->required()
                    ->label('Harga Total (Rp)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_penyewa')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Penyewa'),
                Tables\Columns\TextColumn::make('nama_barang')
                    ->label('Nama Barang'),
                Tables\Columns\TextColumn::make('tanggal_sewa')
                    ->label('Tanggal Sewa'),
                Tables\Columns\TextColumn::make('tanggal_kembali')
                    ->label('Tanggal Kembali'),
                Tables\Columns\TextColumn::make('harga_total')
                    ->money('IDR')
                    ->label('Harga Total'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksiSewa::route('/'),
            'create' => Pages\CreateTransaksiSewa::route('/create'),
            'edit' => Pages\EditTransaksiSewa::route('/{record}/edit'),
        ];
    }
}
