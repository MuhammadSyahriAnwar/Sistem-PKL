<?php

namespace App\Filament\Resources\JadwalPklResource\Pages;

use App\Filament\Resources\JadwalPklResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPkls extends ListRecords
{
    protected static string $resource = JadwalPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
