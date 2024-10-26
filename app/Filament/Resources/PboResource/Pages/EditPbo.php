<?php

namespace App\Filament\Resources\PboResource\Pages;

use App\Filament\Resources\PboResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPbo extends EditRecord
{
    protected static string $resource = PboResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
