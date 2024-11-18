<?php

namespace App\Filament\Resources\Ksmt1Resource\Pages;

use App\Filament\Resources\Ksmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt1s extends ListRecords
{
    protected static string $resource = Ksmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
