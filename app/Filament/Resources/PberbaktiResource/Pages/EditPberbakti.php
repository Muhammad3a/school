<?php

namespace App\Filament\Resources\PberbaktiResource\Pages;

use App\Filament\Resources\PberbaktiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPberbakti extends EditRecord
{
    protected static string $resource = PberbaktiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
