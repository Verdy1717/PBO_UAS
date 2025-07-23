<?php

namespace App\Filament\Admin\Resources\PeralatanResource\Pages;

use App\Filament\Admin\Resources\PeralatanResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms;

class EditPeralatan extends EditRecord
{
    protected static string $resource = PeralatanResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_alat')->required(),
            Forms\Components\TextInput::make('nama_alat')->required(),
            Forms\Components\TextInput::make('kategori')->required(),
            Forms\Components\TextInput::make('harga_sewa_per_hari')->numeric()->required(),
            Forms\Components\Textarea::make('keterangan')->required(),
        ]);
    }
}
