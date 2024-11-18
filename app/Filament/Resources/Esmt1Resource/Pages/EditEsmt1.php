<?php

namespace App\Filament\Resources\Esmt1Resource\Pages;

use App\Filament\Resources\Esmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt1 extends EditRecord
{
    protected static string $resource = Esmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
