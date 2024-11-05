<?php

namespace App\Filament\Resources\OkesehatanResource\Pages;

use App\Filament\Resources\OkesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOkesehatan extends EditRecord
{
    protected static string $resource = OkesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
