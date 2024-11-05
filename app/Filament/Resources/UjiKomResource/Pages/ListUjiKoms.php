<?php

namespace App\Filament\Resources\UjiKomResource\Pages;

use App\Filament\Resources\UjiKomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUjiKoms extends ListRecords
{
    protected static string $resource = UjiKomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
