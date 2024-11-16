<?php

namespace App\Filament\Resources\DibadahResource\Pages;

use App\Filament\Resources\DibadahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDibadahs extends ListRecords
{
    protected static string $resource = DibadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
