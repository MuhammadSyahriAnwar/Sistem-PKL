<?php

namespace App\Filament\Resources\JadwalPklResource\Pages;

use App\Filament\Resources\JadwalPklResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPkl extends EditRecord
{
    protected static string $resource = JadwalPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
