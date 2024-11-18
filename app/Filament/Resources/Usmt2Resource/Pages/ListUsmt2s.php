<?php

namespace App\Filament\Resources\Usmt2Resource\Pages;

use App\Filament\Resources\Usmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt2s extends ListRecords
{
    protected static string $resource = Usmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
