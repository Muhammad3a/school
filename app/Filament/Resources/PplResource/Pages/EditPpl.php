<?php

namespace App\Filament\Resources\PplResource\Pages;

use App\Filament\Resources\PplResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPpl extends EditRecord
{
    protected static string $resource = PplResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
