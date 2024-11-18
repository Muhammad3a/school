<?php

namespace App\Filament\Resources\Esmt6Resource\Pages;

use App\Filament\Resources\Esmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEsmt6 extends EditRecord
{
    protected static string $resource = Esmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
