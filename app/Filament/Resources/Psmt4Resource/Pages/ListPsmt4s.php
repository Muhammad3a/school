<?php

namespace App\Filament\Resources\Psmt4Resource\Pages;

use App\Filament\Resources\Psmt4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt4s extends ListRecords
{
    protected static string $resource = Psmt4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
