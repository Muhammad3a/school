<?php

namespace App\Filament\Resources\Esmt3Resource\Pages;

use App\Filament\Resources\Esmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt3 extends EditRecord
{
    protected static string $resource = Esmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
