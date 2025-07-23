<?php

namespace App\Filament\Admin\Resources\KameraResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\KameraResource;
use Filament\Forms;
use Filament\Forms\Form;

class CreateKamera extends CreateRecord
{
    protected static string $resource = KameraResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_alat')->required(),
            Forms\Components\TextInput::make('nama_alat')->required(),
            Forms\Components\TextInput::make('harga_sewa_per_hari')->numeric()->required(),
            Forms\Components\TextInput::make('resolusi')->numeric()->required(),
            Forms\Components\TextInput::make('merk')->required(),
        ]);
    }
}
