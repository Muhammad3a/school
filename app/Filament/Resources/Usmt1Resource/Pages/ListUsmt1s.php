<?php

namespace App\Filament\Resources\Usmt1Resource\Pages;

use App\Filament\Resources\Usmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt1s extends ListRecords
{
    protected static string $resource = Usmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
