<?php

namespace App\Filament\Resources\Dsmt2Resource\Pages;

use App\Filament\Resources\Dsmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDsmt2s extends ListRecords
{
    protected static string $resource = Dsmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
