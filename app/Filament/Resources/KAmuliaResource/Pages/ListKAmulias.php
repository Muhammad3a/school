<?php

namespace App\Filament\Resources\KAmuliaResource\Pages;

use App\Filament\Resources\KAmuliaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKAmulias extends ListRecords
{
    protected static string $resource = KAmuliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
