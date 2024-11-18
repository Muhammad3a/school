<?php

namespace App\Filament\Resources\Psmt5Resource\Pages;

use App\Filament\Resources\Psmt5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt5s extends ListRecords
{
    protected static string $resource = Psmt5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
