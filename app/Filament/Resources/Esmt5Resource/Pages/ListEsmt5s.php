<?php

namespace App\Filament\Resources\Esmt5Resource\Pages;

use App\Filament\Resources\Esmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEsmt5s extends ListRecords
{
    protected static string $resource = Esmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
