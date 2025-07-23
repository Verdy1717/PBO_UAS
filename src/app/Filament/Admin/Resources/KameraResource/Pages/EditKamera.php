<?php

namespace App\Filament\Admin\Resources\KameraResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\KameraResource;
use Filament\Forms;
use Filament\Forms\Form;

class EditKamera extends EditRecord
{
    protected static string $resource = KameraResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_alat')
                ->required()
                ->maxLength(10),
            Forms\Components\TextInput::make('nama_alat')
                ->required()
                ->maxLength(50),
            Forms\Components\TextInput::make('harga_sewa_per_hari')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('resolusi')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('merk')
                ->required()
                ->maxLength(50),
        ]);
    }
}
