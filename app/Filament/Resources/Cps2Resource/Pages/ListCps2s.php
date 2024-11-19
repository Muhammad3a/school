<?php

namespace App\Filament\Resources\Cps2Resource\Pages;

use App\Filament\Resources\Cps2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCps2s extends ListRecords
{
    protected static string $resource = Cps2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
