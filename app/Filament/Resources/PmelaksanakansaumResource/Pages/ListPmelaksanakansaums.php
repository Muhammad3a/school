<?php

namespace App\Filament\Resources\PmelaksanakansaumResource\Pages;

use App\Filament\Resources\PmelaksanakansaumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPmelaksanakansaums extends ListRecords
{
    protected static string $resource = PmelaksanakansaumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
