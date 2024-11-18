<?php

namespace App\Filament\Resources\Ksmt2Resource\Pages;

use App\Filament\Resources\Ksmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt2s extends ListRecords
{
    protected static string $resource = Ksmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
