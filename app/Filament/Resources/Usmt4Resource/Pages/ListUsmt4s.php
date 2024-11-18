<?php

namespace App\Filament\Resources\Usmt4Resource\Pages;

use App\Filament\Resources\Usmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt4s extends ListRecords
{
    protected static string $resource = Usmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
