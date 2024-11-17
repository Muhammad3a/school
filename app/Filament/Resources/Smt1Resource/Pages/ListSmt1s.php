<?php

namespace App\Filament\Resources\Smt1Resource\Pages;

use App\Filament\Resources\Smt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt1s extends ListRecords
{
    protected static string $resource = Smt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
