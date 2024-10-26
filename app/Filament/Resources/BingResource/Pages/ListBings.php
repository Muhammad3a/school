<?php

namespace App\Filament\Resources\BingResource\Pages;

use App\Filament\Resources\BingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBings extends ListRecords
{
    protected static string $resource = BingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
