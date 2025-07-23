<?php

namespace App\Filament\Admin\Resources\TransaksiSewaResource\Pages;

use App\Filament\Admin\Resources\TransaksiSewaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;

class CreateTransaksiSewa extends CreateRecord
{
    protected static string $resource = TransaksiSewaResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('pelanggan_id')
                ->relationship('pelanggan', 'nama')
                ->required(),

            Forms\Components\TextInput::make('jenis_alat')->required(),

            Forms\Components\TextInput::make('alat_id')->numeric()->required(),

            DatePicker::make('tanggal_sewa')->required(),
            DatePicker::make('tanggal_kembali')->required(),

            Forms\Components\TextInput::make('total_harga')->numeric()->required(),
        ]);
    }
}
