<?php

namespace App\Filament\Resources\PkkResource\Pages;

use App\Filament\Resources\PkkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPkk extends EditRecord
{
    protected static string $resource = PkkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
