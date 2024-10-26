<?php

namespace App\Filament\Resources\SbResource\Pages;

use App\Filament\Resources\SbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSb extends EditRecord
{
    protected static string $resource = SbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
