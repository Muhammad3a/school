<?php

namespace App\Filament\Resources\PtalimdanceramahResource\Pages;

use App\Filament\Resources\PtalimdanceramahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPtalimdanceramahs extends ListRecords
{
    protected static string $resource = PtalimdanceramahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
