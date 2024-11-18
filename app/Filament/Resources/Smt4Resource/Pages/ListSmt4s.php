<?php

namespace App\Filament\Resources\Smt4Resource\Pages;

use App\Filament\Resources\Smt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt4s extends ListRecords
{
    protected static string $resource = Smt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
