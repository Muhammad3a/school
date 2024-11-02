<?php

namespace App\Filament\Resources\BerekayasaResource\Pages;

use App\Filament\Resources\BerekayasaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerekayasas extends ListRecords
{
    protected static string $resource = BerekayasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
