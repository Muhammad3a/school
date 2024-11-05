<?php

namespace App\Filament\Resources\KewirausahaResource\Pages;

use App\Filament\Resources\KewirausahaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKewirausahas extends ListRecords
{
    protected static string $resource = KewirausahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
