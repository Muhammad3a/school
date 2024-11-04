<?php

namespace App\Filament\Resources\DbelajarResource\Pages;

use App\Filament\Resources\DbelajarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDbelajar extends EditRecord
{
    protected static string $resource = DbelajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
