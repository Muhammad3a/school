<?php

namespace App\Filament\Resources\DbelajarResource\Pages;

use App\Filament\Resources\DbelajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDbelajars extends ListRecords
{
    protected static string $resource = DbelajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
