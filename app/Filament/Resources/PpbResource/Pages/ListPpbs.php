<?php

namespace App\Filament\Resources\PpbResource\Pages;

use App\Filament\Resources\PpbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPpbs extends ListRecords
{
    protected static string $resource = PpbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
