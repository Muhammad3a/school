<?php

namespace App\Filament\Resources\BdResource\Pages;

use App\Filament\Resources\BdResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBds extends ListRecords
{
    protected static string $resource = BdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
