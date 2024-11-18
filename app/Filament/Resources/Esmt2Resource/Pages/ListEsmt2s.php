<?php

namespace App\Filament\Resources\Esmt2Resource\Pages;

use App\Filament\Resources\Esmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEsmt2s extends ListRecords
{
    protected static string $resource = Esmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
