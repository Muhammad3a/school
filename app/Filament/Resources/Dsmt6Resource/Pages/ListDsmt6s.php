<?php

namespace App\Filament\Resources\Dsmt6Resource\Pages;

use App\Filament\Resources\Dsmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDsmt6s extends ListRecords
{
    protected static string $resource = Dsmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
