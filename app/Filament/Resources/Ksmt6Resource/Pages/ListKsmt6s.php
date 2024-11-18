<?php

namespace App\Filament\Resources\Ksmt6Resource\Pages;

use App\Filament\Resources\Ksmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKsmt6s extends ListRecords
{
    protected static string $resource = Ksmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
