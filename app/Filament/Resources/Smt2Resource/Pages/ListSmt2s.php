<?php

namespace App\Filament\Resources\Smt2Resource\Pages;

use App\Filament\Resources\Smt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt2s extends ListRecords
{
    protected static string $resource = Smt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
