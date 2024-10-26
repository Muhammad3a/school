<?php

namespace App\Filament\Resources\BarabResource\Pages;

use App\Filament\Resources\BarabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarabs extends ListRecords
{
    protected static string $resource = BarabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
