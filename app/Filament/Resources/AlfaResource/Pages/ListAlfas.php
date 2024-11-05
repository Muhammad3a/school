<?php

namespace App\Filament\Resources\AlfaResource\Pages;

use App\Filament\Resources\AlfaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlfas extends ListRecords
{
    protected static string $resource = AlfaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
