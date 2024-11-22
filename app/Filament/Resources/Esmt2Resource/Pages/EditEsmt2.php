<?php

namespace App\Filament\Resources\Esmt2Resource\Pages;

use App\Filament\Resources\Esmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt2 extends EditRecord
{
    protected static string $resource = Esmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}