<?php

namespace App\Filament\Resources\DberbahasaResource\Pages;

use App\Filament\Resources\DberbahasaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDberbahasas extends ListRecords
{
    protected static string $resource = DberbahasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
