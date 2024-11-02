<?php

namespace App\Filament\Resources\BkerjaResource\Pages;

use App\Filament\Resources\BkerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBkerjas extends ListRecords
{
    protected static string $resource = BkerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
