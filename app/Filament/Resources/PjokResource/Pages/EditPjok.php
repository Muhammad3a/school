<?php

namespace App\Filament\Resources\PjokResource\Pages;

use App\Filament\Resources\PjokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPjok extends EditRecord
{
    protected static string $resource = PjokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
