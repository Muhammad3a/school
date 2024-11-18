<?php

namespace App\Filament\Resources\Smt3Resource\Pages;

use App\Filament\Resources\Smt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt3s extends ListRecords
{
    protected static string $resource = Smt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
