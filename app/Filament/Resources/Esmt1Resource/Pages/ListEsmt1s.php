<?php

namespace App\Filament\Resources\Esmt1Resource\Pages;

use App\Filament\Resources\Esmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEsmt1s extends ListRecords
{
    protected static string $resource = Esmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
