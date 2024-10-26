<?php

namespace App\Filament\Resources\FisikaResource\Pages;

use App\Filament\Resources\FisikaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFisika extends EditRecord
{
    protected static string $resource = FisikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
