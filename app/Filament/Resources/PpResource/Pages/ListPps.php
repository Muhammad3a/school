<?php

namespace App\Filament\Resources\PpResource\Pages;

use App\Filament\Resources\PpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPps extends ListRecords
{
    protected static string $resource = PpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
