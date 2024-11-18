<?php

namespace App\Filament\Resources\Esmt5Resource\Pages;

use App\Filament\Resources\Esmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt5 extends EditRecord
{
    protected static string $resource = Esmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
