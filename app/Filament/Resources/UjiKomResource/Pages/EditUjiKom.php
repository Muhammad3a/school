<?php

namespace App\Filament\Resources\UjiKomResource\Pages;

use App\Filament\Resources\UjiKomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUjiKom extends EditRecord
{
    protected static string $resource = UjiKomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
