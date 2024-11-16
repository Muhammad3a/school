<?php

namespace App\Filament\Resources\DwaktuResource\Pages;

use App\Filament\Resources\DwaktuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDwaktu extends EditRecord
{
    protected static string $resource = DwaktuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
