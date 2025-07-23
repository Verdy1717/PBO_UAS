<?php

namespace App\Filament\Admin\Resources\TransaksiSewaResource\Pages;

use App\Filament\Admin\Resources\TransaksiSewaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransaksiSewa extends ListRecords
{
    protected static string $resource = TransaksiSewaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
