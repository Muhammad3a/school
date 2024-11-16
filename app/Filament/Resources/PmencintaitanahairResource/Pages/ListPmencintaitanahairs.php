<?php

namespace App\Filament\Resources\PmencintaitanahairResource\Pages;

use App\Filament\Resources\PmencintaitanahairResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPmencintaitanahairs extends ListRecords
{
    protected static string $resource = PmencintaitanahairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
