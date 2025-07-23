<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DroneResource\Pages;
use App\Models\Drone;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DroneResource extends Resource
{
    protected static ?string $model = Drone::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Drone';
    protected static ?string $pluralModelLabel = 'Drone';
    protected static ?string $modelLabel = 'Drone';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
            ->filters([])
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
            'index' => Pages\ListDrones::route('/'),
            'create' => Pages\CreateDrone::route('/create'),
            'edit' => Pages\EditDrone::route('/{record}/edit'),
        ];
    }
}
