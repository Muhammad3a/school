<?php

namespace App\Filament\Resources\Ksmt3Resource\Pages;

use App\Filament\Resources\Ksmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt3s extends ListRecords
{
    protected static string $resource = Ksmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
