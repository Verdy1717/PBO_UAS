<?php

namespace App\Filament\Admin\Resources\PelangganResource\Pages;

use App\Filament\Admin\Resources\PelangganResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Filament\Forms\Form;

class EditPelanggan extends EditRecord
{
    protected static string $resource = PelangganResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('nomor_hp')->required(),
            Forms\Components\Textarea::make('alamat')->required(),
        ]);
    }
}
