<?php

namespace App\Filament\Resources\Smt6Resource\Pages;

use App\Filament\Resources\Smt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmt6s extends ListRecords
{
    protected static string $resource = Smt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
