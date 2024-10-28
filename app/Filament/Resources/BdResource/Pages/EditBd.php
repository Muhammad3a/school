<?php

namespace App\Filament\Resources\BdResource\Pages;

use App\Filament\Resources\BdResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBd extends EditRecord
{
    protected static string $resource = BdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
