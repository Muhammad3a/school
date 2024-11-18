<?php

namespace App\Filament\Resources\Esmt4Resource\Pages;

use App\Filament\Resources\Esmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt4 extends EditRecord
{
    protected static string $resource = Esmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
