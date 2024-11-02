<?php

namespace App\Filament\Resources\BerekayasaResource\Pages;

use App\Filament\Resources\BerekayasaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerekayasa extends EditRecord
{
    protected static string $resource = BerekayasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
