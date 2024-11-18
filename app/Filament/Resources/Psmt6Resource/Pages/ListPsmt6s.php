<?php

namespace App\Filament\Resources\Psmt6Resource\Pages;

use App\Filament\Resources\Psmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsmt6s extends ListRecords
{
    protected static string $resource = Psmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
