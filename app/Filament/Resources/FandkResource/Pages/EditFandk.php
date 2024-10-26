<?php

namespace App\Filament\Resources\FandkResource\Pages;

use App\Filament\Resources\FandkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFandk extends EditRecord
{
    protected static string $resource = FandkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
