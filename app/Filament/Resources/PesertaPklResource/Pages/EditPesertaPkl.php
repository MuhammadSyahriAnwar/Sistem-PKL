<?php

namespace App\Filament\Resources\PesertaPklResource\Pages;

use App\Filament\Resources\PesertaPklResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesertaPkl extends EditRecord
{
    protected static string $resource = PesertaPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
