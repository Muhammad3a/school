<?php

namespace App\Filament\Resources\BandkResource\Pages;

use App\Filament\Resources\BandkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBandks extends ListRecords
{
    protected static string $resource = BandkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
