<?php

namespace App\Filament\Resources\Ksmt5Resource\Pages;

use App\Filament\Resources\Ksmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt5s extends ListRecords
{
    protected static string $resource = Ksmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
