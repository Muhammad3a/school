<?php

namespace App\Filament\Resources\Ksmt4Resource\Pages;

use App\Filament\Resources\Ksmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt4s extends ListRecords
{
    protected static string $resource = Ksmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
