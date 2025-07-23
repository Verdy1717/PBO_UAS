<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KameraResource\Pages;
use App\Models\Kamera;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class KameraResource extends Resource
{
    protected static ?string $model = Kamera::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // ✅ Tambahkan ini untuk ubah label sidebar
    public static function getNavigationLabel(): string
    {
        return 'Kamera';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKameras::route('/'),
            'create' => Pages\CreateKamera::route('/create'),
            'edit' => Pages\EditKamera::route('/{record}/edit'),
        ];
    }
}
