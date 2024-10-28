<?php

namespace App\Filament\Resources\PwebResource\Pages;

use App\Filament\Resources\PwebResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPwebs extends ListRecords
{
    protected static string $resource = PwebResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
