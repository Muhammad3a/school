<?php

namespace App\Filament\Resources\PbusanamuslimResource\Pages;

use App\Filament\Resources\PbusanamuslimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPbusanamuslims extends ListRecords
{
    protected static string $resource = PbusanamuslimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
