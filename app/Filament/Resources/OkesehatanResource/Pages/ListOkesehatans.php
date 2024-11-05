<?php

namespace App\Filament\Resources\OkesehatanResource\Pages;

use App\Filament\Resources\OkesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOkesehatans extends ListRecords
{
    protected static string $resource = OkesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
