<?php

namespace App\Filament\Resources\PbusanamuslimResource\Pages;

use App\Filament\Resources\PbusanamuslimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPbusanamuslim extends EditRecord
{
    protected static string $resource = PbusanamuslimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
