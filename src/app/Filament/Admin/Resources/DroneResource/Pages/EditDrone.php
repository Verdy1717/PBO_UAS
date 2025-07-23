<?php

namespace App\Filament\Admin\Resources\DroneResource\Pages;

use App\Filament\Admin\Resources\DroneResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Filament\Forms\Form;

class EditDrone extends EditRecord
{
    protected static string $resource = DroneResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_alat')->required(),
            Forms\Components\TextInput::make('nama_alat')->required(),
            Forms\Components\TextInput::make('harga_sewa_per_hari')->numeric()->required(),
            Forms\Components\TextInput::make('jarak_terbang')->numeric()->suffix(' meter')->required(),
            Forms\Components\Toggle::make('fitur_gps')->label('Fitur GPS')->required(),
        ]);
    }
}
