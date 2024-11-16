<?php

namespace App\Filament\Resources\Dk3Resource\Pages;

use App\Filament\Resources\Dk3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDk3s extends ListRecords
{
    protected static string $resource = Dk3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
