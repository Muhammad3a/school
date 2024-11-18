<?php

namespace App\Filament\Resources\Psmt3Resource\Pages;

use App\Filament\Resources\Psmt3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt3s extends ListRecords
{
    protected static string $resource = Psmt3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
