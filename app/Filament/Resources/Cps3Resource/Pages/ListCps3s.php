<?php

namespace App\Filament\Resources\Cps3Resource\Pages;

use App\Filament\Resources\Cps3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCps3s extends ListRecords
{
    protected static string $resource = Cps3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
