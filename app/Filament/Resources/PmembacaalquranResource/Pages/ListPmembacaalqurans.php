<?php

namespace App\Filament\Resources\PmembacaalquranResource\Pages;

use App\Filament\Resources\PmembacaalquranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPmembacaalqurans extends ListRecords
{
    protected static string $resource = PmembacaalquranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
