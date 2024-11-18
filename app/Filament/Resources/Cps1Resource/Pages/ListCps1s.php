<?php

namespace App\Filament\Resources\Cps1Resource\Pages;

use App\Filament\Resources\Cps1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCps1s extends ListRecords
{
    protected static string $resource = Cps1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
