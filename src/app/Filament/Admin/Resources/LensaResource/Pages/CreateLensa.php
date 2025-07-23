<?php

namespace App\Filament\Admin\Resources\LensaResource\Pages;

use App\Filament\Admin\Resources\LensaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Filament\Forms\Form;

class CreateLensa extends CreateRecord
{
    protected static string $resource = LensaResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_alat')->required(),
            Forms\Components\TextInput::make('nama_alat')->required(),
            Forms\Components\TextInput::make('harga_sewa_per_hari')->numeric()->required(),
            Forms\Components\TextInput::make('tipe')->required(),
            Forms\Components\TextInput::make('jarak_fokus')->numeric()->required(),
        ]);
    }
}
