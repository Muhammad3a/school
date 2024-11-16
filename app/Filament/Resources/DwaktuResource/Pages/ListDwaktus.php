<?php

namespace App\Filament\Resources\DwaktuResource\Pages;

use App\Filament\Resources\DwaktuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDwaktus extends ListRecords
{
    protected static string $resource = DwaktuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
