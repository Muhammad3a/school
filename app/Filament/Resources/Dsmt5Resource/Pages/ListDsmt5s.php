<?php

namespace App\Filament\Resources\Dsmt5Resource\Pages;

use App\Filament\Resources\Dsmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDsmt5s extends ListRecords
{
    protected static string $resource = Dsmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
