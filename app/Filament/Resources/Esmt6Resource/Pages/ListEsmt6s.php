<?php

namespace App\Filament\Resources\Esmt6Resource\Pages;

use App\Filament\Resources\Esmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEsmt6s extends ListRecords
{
    protected static string $resource = Esmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
