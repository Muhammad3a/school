<?php

namespace App\Filament\Resources\Dsmt3Resource\Pages;

use App\Filament\Resources\Dsmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDsmt3s extends ListRecords
{
    protected static string $resource = Dsmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
