<?php

namespace App\Filament\Resources\PpResource\Pages;

use App\Filament\Resources\PpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPp extends EditRecord
{
    protected static string $resource = PpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
