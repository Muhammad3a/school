<?php

namespace App\Filament\Resources\PjokResource\Pages;

use App\Filament\Resources\PjokResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPjoks extends ListRecords
{
    protected static string $resource = PjokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
