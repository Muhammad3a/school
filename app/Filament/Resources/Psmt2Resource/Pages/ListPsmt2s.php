<?php

namespace App\Filament\Resources\Psmt2Resource\Pages;

use App\Filament\Resources\Psmt2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt2s extends ListRecords
{
    protected static string $resource = Psmt2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
