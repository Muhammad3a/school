<?php

namespace App\Filament\Resources\Psmt1Resource\Pages;

use App\Filament\Resources\Psmt1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt1s extends ListRecords
{
    protected static string $resource = Psmt1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
