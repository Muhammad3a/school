<?php

namespace App\Filament\Resources\DibadahResource\Pages;

use App\Filament\Resources\DibadahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDibadah extends EditRecord
{
    protected static string $resource = DibadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
