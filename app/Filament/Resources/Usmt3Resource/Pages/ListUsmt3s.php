<?php

namespace App\Filament\Resources\Usmt3Resource\Pages;

use App\Filament\Resources\Usmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt3s extends ListRecords
{
    protected static string $resource = Usmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
