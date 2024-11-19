<?php

namespace App\Filament\Resources\Cps5Resource\Pages;

use App\Filament\Resources\Cps5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCps5s extends ListRecords
{
    protected static string $resource = Cps5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
