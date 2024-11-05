<?php

namespace App\Filament\Resources\AlfaResource\Pages;

use App\Filament\Resources\AlfaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlfa extends EditRecord
{
    protected static string $resource = AlfaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
