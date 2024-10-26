<?php

namespace App\Filament\Resources\KimiaResource\Pages;

use App\Filament\Resources\KimiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKimias extends ListRecords
{
    protected static string $resource = KimiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
