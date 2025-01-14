<?php

namespace App\Filament\Resources\Usmt6Resource\Pages;

use App\Filament\Resources\Usmt6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsmt6s extends ListRecords
{
    protected static string $resource = Usmt6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
