<?php

namespace App\Filament\Resources\PmemeliharaadabResource\Pages;

use App\Filament\Resources\PmemeliharaadabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPmemeliharaadabs extends ListRecords
{
    protected static string $resource = PmemeliharaadabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
