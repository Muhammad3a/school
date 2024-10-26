<?php

namespace App\Filament\Resources\MtkResource\Pages;

use App\Filament\Resources\MtkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMtks extends ListRecords
{
    protected static string $resource = MtkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
