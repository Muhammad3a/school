<?php

namespace App\Filament\Resources\SbResource\Pages;

use App\Filament\Resources\SbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSbs extends ListRecords
{
    protected static string $resource = SbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
