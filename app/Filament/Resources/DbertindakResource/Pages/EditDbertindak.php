<?php

namespace App\Filament\Resources\DbertindakResource\Pages;

use App\Filament\Resources\DbertindakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDbertindak extends EditRecord
{
    protected static string $resource = DbertindakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
