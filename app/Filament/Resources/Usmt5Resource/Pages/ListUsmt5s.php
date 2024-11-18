<?php

namespace App\Filament\Resources\Usmt5Resource\Pages;

use App\Filament\Resources\Usmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt5s extends ListRecords
{
    protected static string $resource = Usmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
