<?php

namespace App\Filament\Resources\BingResource\Pages;

use App\Filament\Resources\BingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBing extends EditRecord
{
    protected static string $resource = BingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
