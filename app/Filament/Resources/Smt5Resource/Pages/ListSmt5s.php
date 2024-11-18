<?php

namespace App\Filament\Resources\Smt5Resource\Pages;

use App\Filament\Resources\Smt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt5s extends ListRecords
{
    protected static string $resource = Smt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
